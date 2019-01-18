<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <?php foreach ($data as $value) : ?>
            <div class="swiper-slide hero-content-wrap">
                <img src="<?= Yii::$app->request->baseUrl . "/images//" . $value->infoProgramFoto ?>" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h4><?= $value->infoProgramJudul ?></h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p><?= $value->infoProgramIsi ?></p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="<?= \yii\helpers\Url::to(['site/detail-program', 'id'=>$value->infoProgramId])?>" class="btn gradient-bg mr-2">Baca</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
            <?php endforeach; ?>

            

           
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->

    <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
                
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <a href="<?= yii\helpers\Url::to(['kalkulator/index']) ?>">
                <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <h2><span class="fa fa-lg fa-calculator"></span></h2>
                        </figure>
                        <header class="entry-header">
                            <h3 class="entry-title">Kalkulator Zakat</h3>
                        </header>

                        <div class="entry-content">
                            <p> </p><br><br>
                        </div>
                    </div>
                 </a>
                    
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <a href="<?= yii\helpers\Url::to(['site/rekening']) ?>">
                    <div class="icon-box">
                    <figure class="d-flex justify-content-center">
                            <h2><span class="fa fa-credit-card fa-lg"></span></h2>
                        </figure>
                        <header class="entry-header">
                            <h3 class="entry-title">Rekening Donasi</h3><br>
                        </header>

                        <div class="entry-content">
                            <p> </p><br>
                        </div>
                    </div>
                </div>
                    </a>
                    

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                <a href="">
                <div class="icon-box">
                <figure class="d-flex justify-content-center">
                            <h2><span class="fa fa-lg fa-building"></span></h2>
                            
                        </figure>
                        <header class="entry-header">
                            <h3 class="entry-title">Kantor Layanan</h3>
                        </header>

                        <div class="entry-content">
                            <p>Jalan Soekarano Hatta no. 70A </p>
                            <p>Telepon 0761-565663</p>
                            
                        </div>
                        <p></p>
                    </div>
                </a>
                    
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Sejarah Swadaya Ummah</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <p>Swadaya Ummah berdiri pada tahun 2002, dengan badan hukum yayasan, dengan Akte Notaris Tajib Rahardjo, SH Nomor 115 Tahun 2002. Pada tahun 2003 Swadaya Ummah telah dikukuhkan sebagai Lembaga Amil Zakat (LAZ) Propinsi Riau oleh Bapak Gubernur Riau HM. Rusli Zainal, SE dengan dikeluarkannya Surat Keputusan (SK) Gubernur Riau Nomor 561/XII/2003. Dengan demikian Swadaya Ummah telah diakui secara resmi menjadi lembaga pertama yang dipercaya Pemerintah Propinsi Riau untuk mengelola dana zakat, infaq/sedekah maupun wakaf.</p>
                        </div><!-- .entry-content -->

                        
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="images/welcome.jpg" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

    

                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->
