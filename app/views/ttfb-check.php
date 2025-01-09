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
                    <input type="checkbox" name="cities[]" value="Bangalore" id="bangalore" checked>
                    <label for="mumbai">Bangalore</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="cities[]" value="UAE" id="uae" checked>
                    <label for="mumbai">UAE</label>
                </div>
                
                <div class="checkbox-group">
                    <input type="checkbox" name="cities[]" value="London" id="london" checked>
                    <label for="london">London</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="cities[]" value="New York" id="newyork" checked>
                    <label for="newyork">New York</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="cities[]" value="Sydney" id="sydney">
                    <label for="sydney">Sydney</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="cities[]" value="Sao Paulo" id="saopaulo">
                    <label for="saopaulo">Sao Paulo</label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" name="cities[]" value="Cape Town" id="capetown">
                    <label for="saopaulo">Cape Town</label>
                </div>
                

                

                

                
            </div>
        </form>
    </div>
</section>