<div class="merch-katalog p-2 pl-5 pr-5">
    <h1 class="mt-lg-3 mt-2">Silahkan Pilih Kategori :</h1>
    <div class="mt-4 pb-lg-3">
        <div class="row">
            <div class="col-md-2 d-flex flex-column buttonnya">
                <a class="btn active" id="b-tshirt" onclick="showCategory('tshirt')"><span>T-Shirt</span></a>
                <a class="btn" id="b-totebag" onclick="showCategory('totebag')"><span>Totebag</span></a>
                <a class="btn" id="b-sticker" onclick="showCategory('sticker')"><span>Sticker</span></a>
                <a class="btn" id="b-lighter" onclick="showCategory('lighter')"><span>Lighter</span></a>
                <a class="btn" id="b-keychain" onclick="showCategory('keychain')"><span>Keychain</span></a>
                <a class="btn" id="b-bundle" onclick="showCategory('bundle')"><span>Bundle</span></a>
                <a class="btn" id="b-sizechart" onclick="showCategory('sizechart')"><span>Size Chart</span></a>
            </div>

            <div class="col-md-10 p-3" id="gallery">
                <div id="tshirt" class="gallery-category active">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/t-shirt-white.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>TS-PT</p>
                                     <p class="mt-0">Rp 85.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-white align-item-center">
                                    <img src="{{ asset('civex/img/katalog/t-shirt-black.png') }}" alt="">
                                </div>
                                <a class="button-card bg-black d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-white.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-white.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>TS-HT</p>
                                     <p class="mt-0">Rp 85.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="totebag" class="gallery-category">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/totebag-white.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>TB-PT</p>
                                     <p class="mt-0">Rp 35.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-white align-item-center">
                                    <img src="{{ asset('civex/img/katalog/totebag-black.png') }}" alt="">
                                </div>
                                <a class="button-card bg-black d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-white.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-white.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>TB-HT</p>
                                     <p class="mt-0">Rp 35.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticker" class="gallery-category">
                    <div class="row mt-3">
                        <div class="col-4">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/sticker-1.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>ST-Notes</p>
                                     <p class="mt-0">Rp 3.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/sticker-2.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>ST-Cibot</p>
                                     <p class="mt-0">Rp 3.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/sticker-3.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>ST-Civex</p>
                                     <p class="mt-0">Rp 3.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/sticker-4.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>ST-Booty</p>
                                     <p class="mt-0">Rp 3.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/sticker-5.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>ST-Cipodino</p>
                                     <p class="mt-0">Rp 3.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/sticker-6.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>ST-Engineer</p>
                                     <p class="mt-0">Rp 3.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="lighter" class="gallery-category">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/lighter-1.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>Lighter Civex</p>
                                     <p class="mt-0">Rp 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/lighter-2.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>Lighter Civex Expo</p>
                                     <p class="mt-0">Rp 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="keychain" class="gallery-category">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/keychain-1.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>Booty Keychain</p>
                                     <p class="mt-0">Rp 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/keychain-2.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>Cipodino Keychain</p>
                                     <p class="mt-0">Rp 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bundle" class="gallery-category">
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/bundel-1.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>Bundle 1</p>
                                     <p class="sub">T-Shirt, Totebag,Keychain, Sticker 3 pcs</p>
                                     <p class="mt-0">Rp 130.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="item-card">
                                <div class="image bg-balck align-item-center">
                                    <img src="{{ asset('civex/img/katalog/bundel-2.png') }}" alt="">
                                </div>
                                <a class="button-card bg-white d-flex justify-content-between px-2 py-3">
                                    <img src="{{ asset('civex/img/katalog/detail-black.svg') }}" alt="">
                                    <img src="{{ asset('civex/img/katalog/buy-now-black.svg') }}" alt="">
                                </a>
                                <div class="name mt-3">
                                     <p>Bundle 2</p>
                                     <p class="sub">Totebag,Keychain, Sticker 3 pcs</p>
                                     <p class="mt-0">Rp 50.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sizechart" class="gallery-category">
                    <div class="row mt-3 text-center">
                        <div class="col-12">
                            <img class="size" src="{{ asset('civex/img/katalog/size-chart.svg') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showCategory(category) {
        hideAllCategories();
        document.getElementById(category).classList.add('active');
        document.getElementById('b-' + category).classList.add('active');
    }

    function hideAllCategories() {
        let galleryCategories = document.querySelectorAll('.gallery-category');
        galleryCategories.forEach(function (category) {
            category.classList.remove('active');
        });

        let buttons = document.querySelectorAll('.buttonnya a');
        buttons.forEach(function (button) {
            button.classList.remove('active');
        });
    }

</script>
