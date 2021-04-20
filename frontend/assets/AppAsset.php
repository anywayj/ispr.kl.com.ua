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
        //'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/animate.min.css',
        'css/prettyPhoto.css',
        'css/owl.carousel.min.css',
        'css/icomoon.css',
        'css/test6.css',
        'css/main66.css',
        'css/responsive29.css',
        //'css/style-signup1.css',
    ];
    public $js = [
        'js/java4.js',
        //'js/jquery.js',
      //  'js/jquery-3.3.1.min',
        'js/bootstrap.min.js',
        'js/jquery.prettyPhoto.js',
        'js/owl.carousel.min.js',
        'js/jquery.isotope.min.js',
        'js/main1.js',
        'js/test.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
