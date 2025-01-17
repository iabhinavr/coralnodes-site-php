<section id="vue-app" class="mt-4 container mx-auto">
    <div class="ttfb-check-form-container min-h-[50vh] flex justify-center items-center flex-col">
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
                <div class="checkbox-group" v-for="(value, key) in regions" :key="value">
                    <input 
                        type="checkbox" 
                        v-model="formData.locations"
                        :value="key" 
                        :id="'location-' + key"
                    >
                    <label :for="'location-' + key">{{value.title}}</label>
                </div>        
            </div>
        </form>
    </div>

    <div class="text-center max-w-5xl mx-auto overflow-hidden">
        <h3 class="text-2xl text-slate-400 font-bold py-2">{{sse.progressMsg}}</h3>

        <h3>Results</h3>
        <table class="result-table">
            <thead class="result-header">
                <tr>
                    <th>Location</th>
                    <th class="text-right">TTFB</th>
                    <th>Show Headers</th>
                </tr>
            </thead>
            <tbody>
                <template v-for="(r, index) in sse.locResults" :key="index">
                    <tr>
                        <td>{{regions[r.location].title}}</td>
                        <td class="text-right">
                            <span v-if="r.status" class="text-black p-2 rounded-sm font-bold text-sm" :class="{ttfb_excellent: getSpeedClass(r.ttfb, 'excellent'), ttfb_fast: getSpeedClass(r.ttfb, 'fast'), ttfb_average: getSpeedClass(r.ttfb, 'average'), ttfb_slow: getSpeedClass(r.ttfb, 'slow'), ttfb_poor: getSpeedClass(r.ttfb, 'poor')}">
                                {{Math.round(r.ttfb) + 'ms'}}
                            </span>
                            <span v-else>
                                {{r.error}}
                            </span>
                        </td>
                        <td>
                            <button @click="toggleExpansion(index)">
                                {{ isExpanded(index) ? "hide" : "show" }}
                            </button>
                        </td>
                        
                    </tr>
                    <tr v-if="isExpanded(index)">
                        <td colspan="3" class="text-left">
                            <div class="mb-2" v-if="r.status" v-for="(hvalue, hkey) in r.respHeaders" :key="hkey">
                                <p class="ttfb-result-hkey">{{hkey}}</p>
                                <p class="ttfb-result-hvalue">{{hvalue}}</p>
                            </div>
                        </td>
                    </tr>
                </template>
                
            </tbody>
        </table>
    </div>

</section>