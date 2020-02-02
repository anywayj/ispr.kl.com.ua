<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Blog */

$this->title = 'Додати повiдомлення';
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-form">
  <div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
	</div>
</div>
