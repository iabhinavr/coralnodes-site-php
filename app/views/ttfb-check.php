<section id="vue-app" class="mt-4 container mx-auto">
    <div class="ttfb-check-form-container min-h-[50vh] flex justify-center items-center flex-col">
        <h1 class="text-4xl mb-4 font-bold">Measure TTFB From 6 Continents</h1>
        <form id="ttfb-check-form" @submit.prevent="submitForm" class="form-2-col">
            <div class="flex items-center justify-between min-w-[40vw]">
                <input v-model="formData.url" type="text" name="url" id="url" placeholder="https://www.example.com"
                    class="main-input" required>
                <button type="submit" class="btn-primary-1">Test</button>
            </div>

            <p class="font-bold text-lg mt-4 text-center">select regions:</p>
            <div class="my-2 text-lg flex">
                <div class="checkbox-group" v-for="(value, key) in regions" :key="value">
                    <input type="checkbox" v-model="formData.locations" :value="key" :id="'location-' + key">
                    <label :for="'location-' + key">{{value.title}}</label>
                </div>
            </div>
        </form>

        <div v-if="error" class="px-4 py-2 bg-red-600 rounded-md my-2">
            {{error}}
        </div>
    </div>

    <div v-if="currentTest.active" class="text-left max-w-5xl mx-auto overflow-hidden">
        <h3 class="text-2xl text-slate-400 font-bold py-2">{{testTitle}}</h3>
        <h4 class="text-xl text-slate-400 font-bold py-2">{{currentTest.progressMsg}}</h4>

        <div class="result-map">
            <svg version="1.1" viewBox="0 0 1052.4 580" xmlns="http://www.w3.org/2000/svg">
                <path fill="darkslategrey" :d="resultMap.svgPath" />
                <g fill="#ccc" stroke-opacity=".79755" stroke-width="2.6523">
                    <template v-for="locIndex in currentTest.locations">
                        <circle :id="'dot-' + locIndex" class="loc-dot"
                            :class="{excellent: isDotClass(locIndex, 'excellent'),fast: isDotClass(locIndex, 'fast'),average: isDotClass(locIndex, 'average'),slow: isDotClass(locIndex, 'slow'),poor: isDotClass(locIndex, 'poor')}"
                            :cx="resultMap.locations[locIndex].x" :cy="resultMap.locations[locIndex].y"
                            :r="resultMap.dotRadius" @mouseenter="onLocDotMouseEnter" @mouseleave="onLocDotMouseLeave"
                            :data-loc-index="locIndex" />
                    </template>
                </g>
            </svg>
            <span id="result-map-tooltip"
                class="p-2 bg-slate-200 text-black absolute rounded flex flex-col items-center justify-center"
                v-if="resultMap.toolTip.show"
                :style="{left: resultMap.toolTip.x + 'px', top: resultMap.toolTip.y + 'px'}">
                <span id="tooltip-loc" class="text-sm">{{regions[resultMap.toolTip.locIndex].title}}</span>
                <span id="tooltip-ttfb" class="text-sm font-bold">{{resultMap.toolTip.ttfb}}</span>
            </span>
        </div>

        <table class="result-table">
            <thead class="result-header">
                <tr>
                    <th>Location</th>
                    <th class="text-right">TTFB</th>
                    <th class="text-center" width="10%">Headers</th>
                </tr>
            </thead>
            <tbody>
                <template v-for="(r, index) in currentTest.locResults" :key="index">
                    <tr>
                        <td>{{regions[r.location].title}}</td>
                        <td class="text-right">
                            <span v-if="r.status" class="text-black p-2 rounded-sm font-bold text-sm speed-tag"
                                :class="{ttfb_excellent: getSpeedClass(r.ttfb, 'excellent'), ttfb_fast: getSpeedClass(r.ttfb, 'fast'), ttfb_average: getSpeedClass(r.ttfb, 'average'), ttfb_slow: getSpeedClass(r.ttfb, 'slow'), ttfb_poor: getSpeedClass(r.ttfb, 'poor')}">
                                {{Math.round(r.ttfb) + 'ms'}}
                            </span>
                            <span v-else>
                                {{r.error}}
                            </span>
                        </td>
                        <td class="text-center">
                            <button @click="toggleExpansion(index)">
                                <span v-if="isExpanded(index)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-dash-circle-dotted" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1z" />
                                    </svg>
                                </span>
                                <span v-else="isExpanded(index)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                                    </svg>
                                </span>
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

        <div v-if="currentTest.status === 'finished'" id="result-overall"
            class="flex items-center justify-around border-2 border-slate-400 p-4 my-4 bg-slate-700 rounded"
            :class="{ttfb_excellent: getSpeedClass(testResult.average, 'excellent'), ttfb_fast: getSpeedClass(testResult.average, 'fast'), ttfb_average: getSpeedClass(testResult.average, 'average'), ttfb_slow: getSpeedClass(testResult.average, 'slow'), ttfb_poor: getSpeedClass(testResult.average, 'poor')}">
            <div class="text-4xl">Summary</div>
            <div class="font-bold text-4xl">{{testResult.average + 'ms'}}</div>
            <div class="font-bold text-4xl speed-category">{{testResult.speedCategory}}</div>
            <div v-if="currentTest.status === 'finished'" id="result-download" class="my-4 text-center">
                <a :href="resultBlob" target="_blank"
                    class="rounded bg-indigo-500 px-4 py-2 font-bold hover:bg-indigo-600" download>
                    Download Results <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-box-arrow-down inline-block ml-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1z" />
                        <path fill-rule="evenodd"
                            d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z" />
                    </svg>
                </a>
            </div>
        </div>



    </div>

</section>