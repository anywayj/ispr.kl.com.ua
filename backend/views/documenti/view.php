<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Documenti */

$this->title = $model->id_documenta;
$this->params['breadcrumbs'][] = ['label' => 'Documentis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="documenti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_documenta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_documenta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_documenta',
            'nomer_documenta',
            'start_date_reg',
            'start_date_otpusk',
            'end_date_otpusk',
            'id_sotrydnika',
            'id_otpyska',
        ],
    ]) ?>

</div>
