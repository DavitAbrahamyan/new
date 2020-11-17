
<?php

/* @var $this View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use yii\web\View;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Shop Online</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="#" method="get">
                        <label for="search"></label><input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <button type="submit"><?=Html::img('@web/img/core-img/search.png')?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content-wrapper d-flex clearfix">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href=""><?=Html::img('@web/img/core-img/logo.png')?></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo">
            <a href=""><?=Html::img('@web/img/core-img/logo.png')?></a>
        </div>
        <!-- Amado Nav -->
        <nav class="amado-nav">
            <ul>
                <li><a href="<?= Url::to(['post/index'])?>">Home</a></li>
                <li><a href="<?= Url::to(['post/shop'])?>">Shop</a></li>
                <li><a href="<?= Url::to(['post/product'])?>">Product</a></li>
                <li><a href="<?= Url::to(['post/cart'])?>">Cart</a></li>
                <li><a href="<?= Url::to(['post/checkout'])?>">Checkout</a></li>
            </ul>
        </nav>
        <!-- Button Group -->
        <div class="amado-btn-group mt-30 mb-100">
            <a href="#" class="btn amado-btn mb-15">%Discount%</a>
            <a href="#" class="btn amado-btn active">New this week</a>
        </div>
        <!-- Cart Menu -->
        <div class="cart-fav-search mb-100">
            <a href="" class="cart-nav"><?=Html::img('@web/img/core-img/cart.png')?> Cart <span>(0)</span></a>
            <a href="#" class="fav-nav"><?=Html::img('@web/img/core-img/favorites.png')?> Favourite</a>
            <a href="#" class="search-nav"><?=Html::img('@web/img/core-img/search.png')?> Search</a>
        </div>
        <!-- Social Button -->
        <div class="social-info d-flex justify-content-between">
            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
    </header>

<?=$content?>

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href=""><?=Html::img('@web/img/core-img/logo2.png')?></a>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>