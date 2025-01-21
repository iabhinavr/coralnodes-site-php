const app = Vue.createApp({
    data() {
        return {
            formData: {
                url: 'https://www.coralnodes.com',
                locations: ['bangalore', 'uae', 'london', 'newyork'],
            },
            regions: {
                mumbai: {title: 'Mumbai'},
                bangalore: {title: 'Bangalore'},
                uae: {title: 'UAE'},
                london: {title: 'London'},
                newyork: {title: 'New York'},
                sydney: {title: 'Sydney'},
                saopaulo: {title: 'Sao Paulo'},
                capetown: {title: 'Cape Town'},
            },
            currentTest: {
                active: false,
                status: "",
                url: "https://www.coralnodes.com",
                locations: [],
                error: null,
                progressMsg: "Initializing test...",
                locResults: [
                    JSON.parse(localStorage.getItem('reply_mumbai')),
                    JSON.parse(localStorage.getItem('reply_bangalore')),
                    JSON.parse(localStorage.getItem('reply_uae')),
                    JSON.parse(localStorage.getItem('reply_london')),
                    JSON.parse(localStorage.getItem('reply_newyork')),
                    JSON.parse(localStorage.getItem('reply_sydney')),
                    JSON.parse(localStorage.getItem('reply_saopaulo')),
                    JSON.parse(localStorage.getItem('reply_capetown'))
                ],
            },
            expandedRows: [],
            formDisabled: false,
            resultMap: {
                dotRadius: "6",
                toolTip: {
                    show: false,
                    locIndex: null,
                    ttfb: null,
                    x: 0,
                    y: 0,
                },
                locations: {
                    mumbai: {
                        x: "706.37",
                        y: "296.69",
                    },
                    bangalore: {
                        x: "718.04",
                        y: "314.72"
                    },
                    newyork: {
                        x: "291.15",
                        y: "215.43"
                    },
                    uae: {
                        x: "654.89",
                        y: "272.81"
                    },
                    sydney: {
                        x: "925",
                        y: "472.92"
                    },
                    saopaulo: {
                        x: "372.75",
                        y: "434.03"
                    },
                    capetown: {
                        x: "553.42",
                        y: "473.27"
                    },
                    london: {
                        x: "496.14",
                        y: "172.75"
                    }
                },
                svgPath: window.svgPath
            },
            
        };
    },
    computed: {
        testTitle() {
            if(!this.currentTest.active) {
                return '';
            }
            if(this.currentTest.status === 'running') {
                return `Checking TTFB for ${this.currentTest.url}`;
            }
            if(this.currentTest.status === 'finished') {
                return `TTFB Results for ${this.currentTest.url}`;
            }
        }
    },
    methods: {
        toQueryString(params) {
            const queryString = Object.entries(params)
                .map(([key, value]) => {
                    if (Array.isArray(value)) {
                        return value.map(item => `${encodeURIComponent(key)}[]=${encodeURIComponent(item)}`).join('&');
                    }
                    return `${encodeURIComponent(key)}=${encodeURIComponent(value)}`;
                })
                .join('&');
        
            return queryString;
        },
        async initiateSSE(params) {
            const queryString = this.toQueryString(params);

            console.log("initiateSSE...");

            const eventSource = new EventSource(`/tools/ttfb-test-stream/?${queryString}`);
        
            eventSource.onopen = () => {
              console.log("Connected");
            };
        
            eventSource.onmessage = (event) => {
              const data = event.data;
              console.log(data);
            };
        
            eventSource.onerror = () => {
              console.log("Error (connection lost or failed)");
            };

            eventSource.addEventListener('testError', (event) => {
                this.currentTest.error = event.data;
                eventSource.close();
            });

            eventSource.addEventListener('progressMsg', (event) => {
                this.currentTest.progressMsg = event.data;
            });
        
            eventSource.addEventListener('locResult', (event) => {
              const data = JSON.parse(event.data);
              this.currentTest.locResults.push(data);
            });
        
            eventSource.addEventListener('[end]', (event) => {
              const data = event.data;
              this.currentTest.status = 'finished';
              this.currentTest.progressMsg = data;
              eventSource.close();
            });

            setTimeout(() => {
                this.currentTest.status = 'finished';
                this.currentTest.progressMsg = "Test finished";
                eventSource.close();
            }, 120000);
        },
        async submitForm() {
            console.log('submitForm...');
            this.currentTest.active = true;
            this.currentTest.status = 'running';
            this.currentTest.error = null;
            this.currentTest.progressMsg = null;
            this.currentTest.locResults = [];
            this.expandedRows = [];
            this.formDisabled = true;
            try {

                this.currentTest.url = this.formData.url;
                this.submittedLocations = this.formData.locations;

                const formData = new FormData();
                formData.append("url", this.currentTest.url);
                this.submittedLocations.forEach((location) => {
                    formData.append("locations[]", location);
                });
                const response = await fetch('/tools/ttfb-check/', {
                    method: 'POST',
                    body: formData,
                });
                const result = await response.json();
                if(result.status) {
                    this.initiateSSE(result);
                }
            } catch (error) {
                console.error('Error:', error);
            }
        },
        getSpeedClass(ttfb, speed) {
            let res = false;
            switch (speed) {
                case 'excellent':
                    if(ttfb < 200) 
                        res = true;
                    break;
                case 'fast':
                    if(ttfb < 500 && ttfb >= 200)
                        res = true;
                    break;
                case 'average':
                    if (ttfb < 1000 && ttfb >= 500)
                        res = true;
                    break;
                case 'slow':
                    if (ttfb < 2000 && ttfb >= 1000)
                        res = true;
                    break;
                case 'poor':
                    if(ttfb >= 2000)
                        res = true;
                    break;
                default:
                    res = false;
            }
            return res;
        },
        isDotClass(loc, speed) {
            let res = false;
            let locResult = this.currentTest.locResults.find((l) => l.location === loc);
            if(!locResult) {
                return res;
            }
            if(locResult.status) {
                res = this.getSpeedClass(locResult.ttfb, speed);
            }
            return res;
        },
        toggleExpansion(index) {
            if(this.expandedRows.includes(index)) {
                this.expandedRows = this.expandedRows.filter((i) => i !== index);
            }
            else {
                this.expandedRows.push(index);
            }
        },
        isExpanded(index) {
            if(this.expandedRows.includes(index)) {
                return true;
            }
            return false;
        },
        onLocDotMouseEnter(event) {
            
            let locIndex = event.currentTarget.getAttribute('data-loc-index');

            if(locIndex !== this.resultMap.toolTip.locIndex) {
                let dotPos = event.currentTarget.getBoundingClientRect();
                let locResult = this.currentTest.locResults.find((l) => l.location === locIndex);
                this.resultMap.toolTip.show = true;
                this.resultMap.toolTip.locIndex = locIndex;
                this.resultMap.toolTip.ttfb = locResult?.status ? Math.round(locResult.ttfb) + 'ms' : 'n/a';
                this.resultMap.toolTip.x = dotPos.x + (dotPos.width/2) + window.scrollX;
                this.resultMap.toolTip.y = dotPos.y + (dotPos.height) + window.scrollY + 10;
            }
            
        },
        onLocDotMouseLeave(event) {
            this.resultMap.toolTip.show = false;
            this.resultMap.toolTip.locIndex = null;
        }
    },
});
app.mount('#vue-app');