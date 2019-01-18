<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>LAZ SWADAYA UMMAH</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <header class="site-header" style="border-bottom:1px solid whitesmoke">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <h3 style="color:orange">LAZ SWADAYA UMMAH</h3>
                        </div><!-- .site-branding -->

                        <nav class="navbar navbar-expand-sm  ">
  <!-- Brand -->
 

  <!-- Links -->
                        <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['site/index']) ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['site/about']) ?>">Tentang kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['site/program']) ?>">Program</a></li>
                            <?php if (!Yii::$app->user->isGuest) : ?>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            <i class="fa fa-user-o"></i> <?= Yii::$app->user->identity->nama ?>
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/profile']) ?>"><i class="fa fa-user"></i> profile</a>
                          
                            <a class="dropdown-item" href="#" onclick="keluar(event)"><i class="fa fa-power-off"></i> Keluar</a>
                            <form action="<?= yii\helpers\Url::to(['site/logout']) ?>" style="display:hidden" method="post" id="formlog">
                            <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->getCsrfToken() ?>" />
                            </form>
                                
                            </div>
                            </li>
    
                                <?php else : ?>
                                <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['site/login']) ?>">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= yii\helpers\Url::to(['site/register']) ?>">Register</a></li>
                                <?php endif; ?>
    <!-- Dropdown -->
   
  </ul>
</nav>
                       

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    <?= $content ?>
    

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">


                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>0761- 565663</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Jalan Soekarno Hatta no. 70A</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>Lembaga Amil Zakat Swadaya Ummah  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->


    <?php $this->endBody() ?>
<script>
    function keluar(e){
        e.preventDefault();
        var a = document.getElementById('formlog');
        a.submit();
    }
</script>
</body>

</html>
<?php $this->endPage() ?>
