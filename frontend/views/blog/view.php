<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Blog */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Blogs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-form">
  <div class="container">
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
              <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo Yii::$app->session->getFlash('success'); ?>
              </div>
          <?php endif;?>

    <h1>Заголовок: <?= Html::encode($this->title) ?></h1>

    <div class="form-group">
        <?php if (\Yii::$app->user->can('updatePost', ['author_id' => $model->author_id])): ?>
            <?= Html::a(Yii::t('app', 'Редагувати'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php else: ?> 
            <a href="#" class ="btn btn-primary" data-toggle = 'modal', data-target = '#myModal-error'>Редагувати</a>   
        <?php endif; ?>    
                
        <?php if (\Yii::$app->user->can('deletePost', ['author_id' => $model->author_id])): ?>
             
            
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal-del">
              Видалити
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal-del">
              <div class="modal-dialog">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?= Html::encode($this->title) ?></h4>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                      Ви впевнені, що бажаете видалити цей елемент?
                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="author-left">
                          <b>Автор: </b><?= $model->author['Student_surname'] ?><br>
                          <b>Дата: </b><?= Yii::$app->formatter->asDate($model['date'], 'long') ?>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <?= Html::a('Видалити', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-primary',
                            'data' => [
                                //'confirm' => 'Ви впевнені, що бажаете видалити цей елемент?',
                                'method' => 'post',
                            ],
                        ]) ?>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Скасувати</button>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
        
        <?php endif; ?>

        <?= Html::a(Yii::t("app", "Повернутися"), ["/blog/index"] , ['class' => 'btn btn-warning']) ?>

    </div>
<div class="table-responsive"> 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
              'attribute' => 'text',
              'value' => function($data){
                   return $data->text;
              },
              'format' => 'html',
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
            ],
            'date',
            'image',
            'url:url',

            [
              'attribute' => 'author_id',
              'value' => function($data){
                   return $data->author->Student_surname;
              },
              
            ],

        ],
    ]) ?>
    </div>
  </div>
</div>
