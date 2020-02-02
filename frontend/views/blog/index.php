<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Повiдомлення');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-form">
  <div class="container">
    <div class="row">
      <?php if (\Yii::$app->user->can('teacher', ['author_id' => $model->user_id])): ?>
        <?php if( Yii::$app->session->hasFlash('success') ): ?>
                  <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php echo Yii::$app->session->getFlash('success'); ?>
                  </div>
        <?php endif;?>
          
        <h1><?= Html::encode($this->title) ?></h1>
    
      <?php Pjax::begin(); ?>
      <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
      <?php if (!Yii::$app->user->can('admin')): ?>
          <p><?= Html::a(Yii::t('app', 'Додати повiдомлення'), ['create'], ['class' => 'btn btn-success']) ?></p>
      <?php endif; ?>
        <div id="blog-form" class="table-responsive">   
          <?= GridView::widget([
              'dataProvider' => $dataProvider,
              'tableOptions' => [
                  'class' => 'table table-striped table-bordered table-hover'
              ],

             // 'filterModel' => $searchModel,
              'columns' => [
                 // ['class' => 'yii\grid\SerialColumn'],

                  [
                    'attribute' => 'id',
                    'value' => function($data){
                         return $data->id;
                    },
                    'contentOptions' => ['style'=>'width:20px;'],
                  ],

                  [
                    'attribute' => 'title',
                    'value' => function($data){
                         return $data->title;
                    },
                    'contentOptions' => ['style'=>'width:100px;'],
                  ],
              
                  [
                    'attribute' => 'author_id',
                    'value' => function($data){
                         return $data->author->Student_surname;
                    },
                    'contentOptions' => ['style'=>'width:100px;'],
                  ],

                  [
                      'attribute' => 'status_id',
                      'value' => function($data) {
                          return !$data->status_id ? 
                              '<span class="text-danger">Не активний</span>' : 
                              '<span class="text-success">Активний</span>'; 
                          // если "? (лож = 0)" , " : " в противном случае
                      },
                      'format' => 'html',
                      'contentOptions' => ['style'=>'width:100px;'],
                  ],
                  
                  [
                    'attribute' => 'date',
                    'value' => function($data){
                         return $data->date;
                    },
                    'contentOptions' => ['style'=>'width:100px;'],
                  ],

                  [
                    'class' => 'yii\grid\ActionColumn',
                    'header'=>'Посилання', 
                    'headerOptions' => ['style' => 'color:#337ab7'],
                    'template' => '{view}',
                    'buttons' => [
                      'view' => function ($url,$model,$key) {
                          return Html::a('Переглянути', $url);
                      },
                    ],
                    'contentOptions' => ['style'=>'width:20px;'],
                  ],

                  //['class' => 'yii\grid\ActionColumn'], 



              ],
          ]); ?>
          <?php Pjax::end(); ?>
        </div>    
      <?php endif; ?>

      <div class="col-md-12">
                    <?php foreach ($blog as $k):?> 
                        <div class="blog-item">
                            <a href="#">
                                <?php if($k->image): ?>
                                    <img src="/photo/<?= $k->image ?>" alt="фото"/>
                                <?php else: ?>
                                    <img src="/photo/no-image.png" alt="но-фото"/>
                                <?php endif; ?>               
                            </a>
                            <div class="blog-content">
                                <!-- <a href="#" class="blog_cat"><?= $k->url ?></a> -->
                                <h2><a href="blog-item.html"><?= $k->title ?></a></h2>
                                <!-- <h3 class="blog-text"><?= $k->text ?></h3> -->
                                <h3>
                                    <?php 
                                        $string = $k->text;
                                        $string = strip_tags($string);
                                        $string = rtrim($string, "!,.-");
                                        $string = substr($string, 0, strrpos($string, ' '));
                                        echo substr($string, 0, 500).'...';
                                    ?>
                                </h3>
                                <a class="readmore" href="<?= $k->url ?>">Докладніше <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>  
                    <?php endforeach ?>    
      </div>
      <!--/.col-md-8-->
      
      <!--/.row-->
      <div class="col-md-12 text-center">
                    <ul>
                        <?= LinkPager::widget([
                        'pagination' => $pagination_blog,
                        'prevPageLabel'=>'<i class="fa fa-long-arrow-left"></i>',
                        'nextPageLabel'=>'<i class="fa fa-long-arrow-right"></i>',
                        ]) ?>
                    </ul>
                    <!--/.pagination-->
                </div>
      </div>
    </div>
  </div>
</div>    



         