<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sotrudniki */

$this->title = $model->id_sotrydnika;
$this->params['breadcrumbs'][] = ['label' => 'Sotrudnikis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sotrudniki-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_sotrydnika], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_sotrydnika], [
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
            'id_sotrydnika',
            'second_name',
            'first_name',
            'last_name',
            'position',
            'subdivision',
            'date_start_work',
        ],
    ]) ?>

</div>
