<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Otpysk */

$this->title = $model->id_otpyska;
$this->params['breadcrumbs'][] = ['label' => 'Otpysks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otpysk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_otpyska], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_otpyska], [
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
            'id_otpyska',
            'tip_otpyska',
            'oplata_otpyska',
            'lgoti_po_otpysky',
        ],
    ]) ?>

</div>
