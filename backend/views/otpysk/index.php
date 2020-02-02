<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OtpyskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отпуск';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otpysk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить отпуск', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_otpyska',
            'tip_otpyska',
            'oplata_otpyska',
            'lgoti_po_otpysky',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
