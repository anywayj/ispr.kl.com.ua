<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use backend\assets\MyAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

MyAsset::register($this);
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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
       // 'brandLabel' => Yii::$app->name,
        'brandLabel' => '<div class="">Веб-приложение</div>', 
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Главная', 'url' => ['/site/index']],
       // ['label' => 'Реєстрація викладача', 'url' => ['/site/signup']],
        //['label' => 'Роли', 'url' => ['/site/role']],
        //['label' => 'Блог', 'url' => ['/blog/index']],
        //['label' => 'Достижения', 'url' => ['/progressinscience/index']],
        //['label' => 'Студенты', 'url' => ['/students/index']],
    ];

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Вход', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выход (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout',
                'style' => 'color: #fff;'
              //  font-size: 1.6rem;'
                ]
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <div class="col-lg-3"> 
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    <span class="glyphicon glyphicon-star"></span> Приказ на отпуск
                </a>
                <a href="/admin/sotrudniki/index" class="list-group-item">
                    <span class="glyphicon glyphicon-user"></span> Сотрудники
                </a>
                <a href="/admin/documenti/index" class="list-group-item">
                    <span class="fa fa-list-alt"></span> Документы
                </a>
                <a href="/admin/otpysk/index" class="list-group-item">
                    <span class="glyphicon glyphicon-th-list"></span> Отпуск
                </a>
            </div>  
        </div> 
        <div class="col-lg-9">
                <?= $content ?>    
        </div>
    </div>
  








</div>
<div id="footer">
            <div class="container">
                <div class="row centered">

    <div class="col-lg-12">
    
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-vk"></i></a>

    </div>
    <div class="col-lg-12">
            <i class="fa fa-map-marker"></i>84313, Донецька обл., м. Краматорськ, вул. Академічна (Шкадінова), 72
            <br>
            <i class="fa fa-phone"></i>(0626) 41-67-13
            <i class="fa fa-envelope-o"></i></strong>dgma@dgma.donetsk.ua<br>
            </div>

        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
