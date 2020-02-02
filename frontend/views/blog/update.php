<?php

use yii\helpers\Html;
use common\widgets\FBFWidget;
/* @var $this yii\web\View */
/* @var $model common\models\Blog */

$this->title = 'Редагувати повiдомлення';
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Вiдновити';
?>
<?php if (\Yii::$app->user->can('updatePost', ['author_id' => $model->author_id])): ?>
<div class="login-form">
  <div class="container">
		    <h1><?= Html::encode($this->title) ?></h1>
		
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
		
			<!-- <?/*<div class="alert alert-danger">
			<?= nl2br(Html::encode('Ви не є автором повiдомленяя, дії заборонені.')) ?>
			</div>
			<?= Html::a(Yii::t("app", "Повернутися"), ["/blog/index"] , ['class' => 'btn btn-warning btn-bottom']) */?> -->
			
			

		
	</div>
</div>
<?php else: ?>
<?= FBFWidget::widget([]) ?>

<!-- Modal -->
<div class="modal fade" id="myModal-error" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"><?= Html::encode($this->title) ?></h4>
            </div>
            <div class="modal-body">
                   Ви не є автором повiдомленяя, дії заборонені.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cкасувати</button>
            </div>
        </div>
    </div>
</div>


<?php endif; ?>