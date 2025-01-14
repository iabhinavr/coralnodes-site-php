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
        };
    },
    methods: {
        async submitForm() {
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
                console.log(response);
                const result = await response.json();
                console.log('Response:', result);
                alert('Form submitted successfully!');
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred while submitting the form.');
            }
        },
    },
});
app.mount('#vue-app');