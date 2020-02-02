<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SotrudnikiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sotrudnikis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sotrudniki-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sotrudniki', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sotrydnika',
            'second_name',
            'first_name',
            'last_name',
            'position',
            //'subdivision',
            //'date_start_work',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
