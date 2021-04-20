<?php
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use yii\helpers\Html;
/* @var $this yii\web\View */
use frontend\assets\AppAsset;
use frontend\assets\MyAsset;
use miloschuman\highcharts\Highcharts;

$this->title = 'Головна';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="site-index">
  <?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
  <?php endif;?>
  <div class="row"> 
    <div class="col-lg-4">
      <?php foreach ($blogs as $k):?> 
                <div class="panel panel-primary">
                  <div class="panel-heading ">
                    <h3 class="panel-title x1">
                        <?= $k->title?>                    
                    </h3>
                  </div>
                  <div class="panel-body">
                  <div class="news_meta">Опубліковано: <?= $k->date?> | Автор: <?= $k->author->username?> </div>
              <div class="image_wrapper"><img src="/img/31.jpg" width="100%"  alt="рисунок" /></a></div>
              <br>
                      <?= $k->text?> 
                      <a href="#" class="continue"><?= $k->url ?></a>
                  </div>
                </div>
      <?php endforeach ?> 
      <?= LinkPager::widget(['pagination' => $pagination_blogs]) ?>
    </div>
    <div class="col-lg-4">
        <?php foreach ($news as $k):?> 
                <div class="panel panel-primary">
                  <div class="panel-heading ">
                    <h3 class="panel-title x1">
                        <?= $k->title?>                    
                    </h3>
                  </div>
                  <div class="panel-body">
                  <div class="news_meta">Опубліковано: <?= $k->date?> | Автор: <?= $k->author->username?> </div>
              <div class="image_wrapper"><img src="/img/31.jpg" width="100%"  alt="рисунок" /></a></div>
              <br>
                      <?= $k->text?> 
                      <a href="#" class="continue"><?= $k->url ?></a>
                  </div>
                </div>
        <?php endforeach ?> 
        <?= LinkPager::widget(['pagination' => $pagination_news]) ?>  
    </div>
    <div class="col-lg-4">  
        <h3>Категорії</h3>                           
        <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-graduation-cap"></i></span>
                        </div>
                        <div class="details">
                            <p style="font-size: 1.5rem;">Сесія</p>
                        </div>
        </div>
        <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-star"></i></span>
                        </div>
                        <div class="details">
                            <p style="font-size: 1.5rem;">Олімпіади</p>
                        </div>
        </div>
        <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-hotel"></i></span>
                        </div>
                        <div class="details">
                            <p style="font-size: 1.5rem;">Позанавчальна діяльність</p>
                        </div>
        </div>

        <h3>Популярні новини</h3>
        <div class="hot-news">
          <p>СТУДЕНТІВ ЗАПРОШУЮТЬ СТАТИ ГРОМАДЯНАМИ «СТУДРЕСПУБЛІКИ»</p>
        </div>
        <div class="hot-news">
          <p>ДОЛУЧИСЬ ДО АКЦІЇ «Я СКЛАДАЮ СЕСІЮ БЕЗ ХАБАРІВ»</p>
        </div>
        <div class="hot-news">
          <p>ПРОДОВЖУЄТЬСЯ РОБОТА В СТАРТАП ШКОЛІ СІКОРСЬКІ ЧЕЛЕНДЖ</p>
        </div>
      <?if (!Yii::$app->user->isGuest): ?>
        <h3>Топ</h3>
        <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                            <p><a href="/site/grants">Кращi студенти для заоходщення</a><br/>
                            <muted>Детальнiше</muted>
                            </p>
                        </div>
        </div>
      <?endif ?>
    </div>
  </div>
</div>


      

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

