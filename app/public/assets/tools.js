const app = Vue.createApp({
    data() {
        return {
            formData: {
                url: '',
                locations: ['bangalore', 'uae', 'london', 'newyork'],
            },
            regions: {
                bangalore: {title: 'Bangalore'},
                uae: {title: 'UAE'},
                london: {title: 'London'},
                newyork: {title: 'New York'},
                sydney: {title: 'Sydney'},
                saopaulo: {title: 'Sao Paulo'},
                capetown: {title: 'Cape Town'},
            },
            sse: {
                testError: null,
                progressMsg: "Initializing test...",
                locResults: [
                    JSON.parse(localStorage.getItem('reply_london')),
                    JSON.parse(localStorage.getItem('reply_saopaulo')),
                    JSON.parse(localStorage.getItem('reply_uae'))
                ],
            },
            started: false,
            expandedRows: [],
            formDisabled: false,
        };
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
              this.sse.status = ("Connected");
            };
        
            eventSource.onmessage = (event) => {
              const data = event.data;
              this.sse.replies.push(data);
            };
        
            eventSource.onerror = () => {
              this.sse.status = ("Error (connection lost or failed)");
            };

            eventSource.addEventListener('testError', (event) => {
                this.sse.testError = event.data;
                eventSource.close();
            });

            eventSource.addEventListener('progressMsg', (event) => {
                this.sse.progressMsg = event.data;
            });
        
            eventSource.addEventListener('locResult', (event) => {
              const data = JSON.parse(event.data);
              console.log(event.data);
              console.log(data);
              this.sse.locResults.push(data);
            });
        
            eventSource.addEventListener('[end]', (event) => {
              const data = event.data;
              this.sse.progressMsg = data;
              eventSource.close();
            });

            setTimeout(() => {
                this.sse.progressMsg = "Test timed out";
                eventSource.close();
            }, 120000);
        },
        async submitForm() {
            console.log('submitForm...');
            this.started = true;
            this.sse.testError = null;
            this.sse.progressMsg = null;
            this.sse.locResults = [];
            this.sse.expandedRows = [];
            this.formDisabled = true;
            try {
                const formData = new FormData();
                formData.append("url", this.formData.url);
                this.formData.locations.forEach((location) => {
                    formData.append("locations[]", location);
                });
                const response = await fetch('/tools/ttfb-check/', {
                    method: 'POST',
                    body: formData,
                });
                const result = await response.json();
                console.log(result);
                if(result.status) {
                    this.initiateSSE(result);
                }
            } catch (error) {
                console.error('Error:', error);
            }
        },
        getSpeedClass(ttfb, isSpeed) {
            let res = false;
            switch (isSpeed) {
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
        }
    },
});
app.mount('#vue-app');