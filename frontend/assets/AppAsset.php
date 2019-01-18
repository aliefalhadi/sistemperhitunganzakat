<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/elegant-fonts.css',
        'css/themify-icons.css',
        'css/swiper.min.css',
        'css/style.css',
        'css/custom.css',
    ];
    public $js = [
        // 'js/jquery.js',
        'js/popper.min.js',
        'js/bootstrap.js',
        'js/jquery.collapsible.min.js',
        'js/swiper.min.js',
        'js/jquery.countdown.min.js',
        'js/circle-progress.min.js',
        'js/jquery.countTo.min.js',
        'js/jquery.barfiller.js',
        'js/custom.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
