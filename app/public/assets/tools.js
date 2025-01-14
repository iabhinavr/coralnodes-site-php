const app = Vue.createApp({
    data() {
        return {
            formData: {
                url: '',
                locations: ['bangalore', 'uae', 'london', 'newyork'],
            },
            regions: {
                bangalore: 'Bangalore',
                uae: 'UAE',
                london: 'London',
                newyork: 'New York',
                sydney: 'Sydney',
                saopaulo: 'Sao Paulo',
                capetown: 'Cape Town',
            },
            sse: {
                status: "",
                replies: [],
            },
            started: false,
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
        
            eventSource.addEventListener('myreply', (event) => {
              const data = JSON.parse(event.data);
              this.sse.replies.push(data);
            });
        
            eventSource.addEventListener('[end]', (event) => {
              const data = event.data;
              this.sse.status = (data);
              eventSource.close();
            });

            setTimeout(() => {
                eventSource.close();
            }, 60000);
        },
        async submitForm() {
            console.log('submitForm...');
            this.started = true;
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
    },
});
app.mount('#vue-app');