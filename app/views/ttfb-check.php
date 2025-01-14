<section class="mt-4 container mx-auto">
    <div id="vue-app" class="ttfb-check-form-container min-h-[50vh] flex justify-center items-center flex-col">
        <h1 class="text-4xl mb-4 font-bold">Measure TTFB From 6 Continents</h1>
        <form id="ttfb-check-form" @submit.prevent="submitForm" class="form-2-col">
            <div class="flex items-center justify-between min-w-[40vw]">
                <input
                    v-model="formData.url" 
                    type="text" 
                    name="url" 
                    id="url" 
                    placeholder="https://www.example.com" 
                    class="main-input"
                    required
                >
                <button type="submit" class="btn-primary-1">Test</button>
            </div>
            
            <p class="font-bold text-lg mt-4 text-center">select regions:</p>
            <div class="my-2 text-lg flex">
                <div class="checkbox-group" v-for="(label, value) in regions" :key="value">
                    <input 
                        type="checkbox" 
                        v-model="formData.locations"
                        :value="value" 
                        :id="'location-' + value"
                    >
                    <label :for="'location-' + value">{{label}}</label>
                </div>        
            </div>
        </form>

        <div v-if="started">
            <h3 v-model="sse.status">Status: {{sse.status}}</h3>

            <h3>Results</h3>
            <ul>
                <li v-for="(r, index) in sse.replies" :key="index">
                    {{r}}
                </li>
            </ul>
        </div>
        
    </div>
</section>