<section class="mt-4 container mx-auto">
    <div class="ttfb-check-form-container min-h-[50vh] flex justify-center items-center flex-col">
        <h1 class="text-4xl mb-4 font-bold">Measure TTFB From 6 Continents</h1>
        <form action="" method="post" class="form-2-col">
            <div class="flex items-center justify-between min-w-[40vw]">
                <input type="text" name="url" id="url" placeholder="https://www.example.com" class="main-input">
                <button type="submit" class="btn-primary-1">Test</button>
            </div>
            
            <p class="font-bold text-lg mt-4 text-center">select regions:</p>
            <div class="my-2 text-lg flex">
                <div class="checkbox-group">
                    <input type="checkbox" name="locations[]" value="bangalore" id="location-bangalore" checked>
                    <label for="location-bangalore">Bangalore</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="locations[]" value="uae" id="location-uae" checked>
                    <label for="location-uae">UAE</label>
                </div>
                
                <div class="checkbox-group">
                    <input type="checkbox" name="locations[]" value="london" id="location-london" checked>
                    <label for="location-london">London</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="locations[]" value="newyork" id="location-newyork" checked>
                    <label for="location-newyork">New York</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="locations[]" value="sydney" id="location-sydney">
                    <label for="location-sydney">Sydney</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="locations[]" value="saopaulo" id="location-saopaulo">
                    <label for="location-saopaulo">Sao Paulo</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="locations[]" value="capetown" id="location-capetown">
                    <label for="location-capetown">Cape Town</label>
                </div>         
            </div>
        </form>
    </div>
</section>