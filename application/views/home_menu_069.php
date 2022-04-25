<!-- Content Header (Page header)
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Home</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </div>
        </div>
    </div> /.container-fluid 
</section> -->

<section class="content">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide mw-100" src="<?= base_url() ?>/assets/img/wallpapercat.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Cat Fact</h1>
                        <p>"Kucing peliharaan tertua ada sejak 9500 tahun yang lalu
                            Orang Mesir adalah yang pertama kali memelihara kucing sebagai hewan peliharaan. Dan tahun 2004, para arkeolog Prancis menemukan kuburan kucing berusia 9.500 tahun di Siprus, yang menjadikannya kucing peliharaan tertua di dunia."</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide mw-100" src="<?= base_url() ?>/assets/img/wallpaper4.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Cat Fact</h1>
                        <p>"Menurut Veterinary Hub, kucing menghabiskan 70% hidupnya untuk tidur, yang artinya sekitar 13 hingga 16 jam dalam sehari. Tak heran jika banyak yang bernggapan kalau hewan ini pemalas."</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide mw-100" src="<?= base_url() ?>/assets/img/wallpaper5.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Cat Fact</h1>
                        <p>"Seekor kucing oranye bernama Stubbs pernah menjadi walikota Talkeetna, sebuah kota kecil di Alaska, selama 20 tahun. Dia memenangkan beberapa kali pemilihan walikota. Dan meskipun dia tidak memegang kekuasaan legislatif apapun, dia dicintai oleh penduduk lokal dan turis."</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>