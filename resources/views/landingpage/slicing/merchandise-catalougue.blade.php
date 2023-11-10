<div class="merch-katalog p-3">
    <h1 class="mt-lg-5 mt-2">Silahkan Pilih Kategori:</h1>
    <div class="mt-5">
        <div class="row">
            <div class="col-md-3">


                <div class=" mt-4" role="group" aria-label="Katalog Categories">
                    <button class="btn btn-primary" onclick="showCategory('tshirt')">T-Shirt</button>
                    <button class="btn btn-primary" onclick="showCategory('totebag')">Totebag</button>
                    <button class="btn btn-primary" onclick="showCategory('sticker')">Sticker</button>
                    <button class="btn btn-primary" onclick="showCategory('lighter')">Lighter</button>
                    <button class="btn btn-primary" onclick="showCategory('keychain')">Keychain</button>
                    <button class="btn btn-primary" onclick="showCategory('bundle')">Bundle</button>
                    <button class="btn btn-primary" onclick="showSizeChart()">Size Chart</button>
                </div>
            </div>
        </div>

        <div class="row mt-5" id="gallery">
            <div id="tshirt" class="gallery-category" style="display: block">
                <img src="path/to/tshirt1.jpg" alt="T-Shirt 1">
                <img src="path/to/tshirt2.jpg" alt="T-Shirt 2">
            </div>
            <div id="totebag" class="gallery-category" style="display: none">
                <img src="path/to/totebag1.jpg" alt="Totebag 1">
                <img src="path/to/totebag2.jpg" alt="Totebag 2">
            </div>
        </div>
    </div>
</div>

<script>
    function showCategory(category) {
        hideAllCategories();
        document.getElementById(category).style.display = 'block';
    }

    function showSizeChart() {
        hideAllCategories();

        // ... Add specific logic to show Size Chart here ...
    }

    function hideAllCategories() {
        let galleryCategories = document.querySelectorAll('.gallery-category');
        galleryCategories.forEach(function(category) {
            category.style.display = 'none';
        });
    }
</script>
