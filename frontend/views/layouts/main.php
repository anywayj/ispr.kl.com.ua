<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\Breadcrumbs;
use kartik\sidenav\SideNav;
use yii\helpers\Url;
use frontend\assets\AppAsset;
use frontend\assets\MyAsset;
use common\widgets\Alert;
use miloschuman\highcharts\Highcharts;
use common\widgets\FBFWidget;
use common\widgets\LoginWidget;
use common\widgets\SignupWidget;
use frontend\widgets\LoginFormWidget;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">


    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

    <?= (Yii::$app->user->isGuest ? LoginFormWidget::widget([]) : ''); ?>

    <?= FBFWidget::widget([]) ?>

    <header id="header" class="topper">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">   
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i>&nbsp;(0626) 41-67-13</p>   
                        </div>
                    </div>                                 

                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="https://www.facebook.com/groups/dgma.ispr"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/ispr_dgma"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/communities/102520437869351762026"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="https://t.me/ispr_dgma"><i class="fa fa-telegram"></i></a></li>
                                
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Пошук...">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->      

        <?php
    NavBar::begin([
        //'brandLabel' => Yii::$app->name,
        'brandLabel' => '<h1 class="logo">Кафедра IСПР</h1>',  /*<i class="fa fa-comments"></i>*/
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    
    if (Yii::$app->user->isGuest) {
        $menuItems = [
            ['label' => 'Головна', 'url' => ['/site/index']],
            ['label' => 'Про нас', 'url' => ['/site/about']],
            ['label' => 'Викладачі', 'url' => ['/site/teacher']],
            ['label' => 'Студенту', 'url' => ['/site/control']],
            //['label' => 'Вхiд', 'url' => ['/site/login'], 'options' => ['data-toggle' => 'modal', 'data-target' => '#login-modal']],
            ['label' => 'Вхiд', 'url' => ['/site/login']],
        ];
    } else {
        if (\Yii::$app->user->can('canAdmin')) {
            $u = Yii::$app->user->identity->Student_surname;
        } else {
            $u = Yii::$app->user->identity->students->Student_FIO;
        } //учителя из user , студент ФИО из студентов

        $menuItems = [
        ['label' => 'Головна', 'url' => ['/site/index']],
        ['label' => 'Прогноз успішності', 'items' => [
                    ['label' => 'Прогноз для групи', 'url' => ['/site/entry']],
                    ['label' => 'Iндивідуальний прогноз', 'url' => ['/site/entry2']],
                ]],
        //['label' => 'Якість освіти', 'url' => ['/site/vika'], 'visible' => Yii::$app->user->can('canAdmin')],
        ['label' => 'Викладачi', 'url' => ['/site/teacher']],
        //['label' => 'Дисциплiни', 'url' => ['/site/index4']],
       // ['label' => 'Положение', 'url' => ['/site/control']],
        ['label' => 'Журнали', 'items' => [
                    ['label' => 'Успішність', 'url' => ['/site/estimate']],
                    ['label' => 'Відвідуванність', 'url' => ['/site/estimate1']],
                ]],
        ['label' => 'Управління', 'url' => ['/blog/index']],
        '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton('Вихiд ('.$u.') &nbsp; <i class="fa fa-sign-out"></i>',
                                    ['class' => 'link-log'])
            . Html::endForm()
            . 
        '</li>',
            
        ]; 
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    </header>

    <?= $content ?>

    <div class="bottom">
        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <i class="fa fa-map-marker"></i> 84313, Донецька обл., м. Краматорськ, вул. Академічна (Шкадінова), 72 <br>
                        <i class="fa fa-envelope-o"></i> dgma@dgma.donetsk.ua
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <ul class="footer-ul">
                            <li>
                                <a href="/site/index">Головна
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/site/about">Про нас
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle = 'modal', data-target = '#myModal'>Контакти
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>     
            </div>
        </footer>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
