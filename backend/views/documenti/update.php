<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Documenti */

$this->title = 'Update Documenti: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_documenta, 'url' => ['view', 'id' => $model->id_documenta]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="documenti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
