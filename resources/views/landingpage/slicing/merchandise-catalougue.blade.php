<div class="merch-katalog p-2 pl-5 pr-5">
    <h1 class="mt-lg-3 mt-2">Silahkan Pilih Kategori:</h1>
    <div class="mt-4 pb-lg-3">
        <div class="row">
            <div class="col-md-2 d-flex flex-column">
                <a class="btn btn-primary" onclick="showCategory('tshirt')"><span>T-Shirt</span></a>
                <a class="btn btn-primary" onclick="showCategory('totebag')"><span>Totebag</span></a>
                <a class="btn btn-primary" onclick="showCategory('sticker')"><span>Sticker</span></a>
                <a class="btn btn-primary" onclick="showCategory('lighter')"><span>Lighter</span></a>
                <a class="btn btn-primary" onclick="showCategory('keychain')"><span>Keychain</span></a>
                <a class="btn btn-primary" onclick="showCategory('bundle')"><span>Bundle</span></a>
                <a class="btn btn-primary" onclick="showSizeChart()"><span>Size Chart</span></a>
            </div>

            <div class="col-md-10 p-3" id="gallery">
                <div id="tshirt" class="gallery-category" style="display: block">
                    <div class="row">
                        <div class="col-3">
                            <div class="item-card">
                                <div class="image">
                                    <img src="{{ asset('civex/img/katalog/t-shirt-white.png') }}" alt="">
                                </div>
                                <div class="button">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </div>
                                <div class="name">
                                    TS-PT
                                    Rp85.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="totebag" class="gallery-category" style="display: none">
                    <img src="path/to/totebag1.jpg" alt="Totebag 1">
                    <img src="path/to/totebag2.jpg" alt="Totebag 2">
                </div>
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
