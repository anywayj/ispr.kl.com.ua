<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DocumentiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Документы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="documenti-index">
    <h1><?= Html::encode($this->title) ?></h1>
        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Добавить документ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nomer_documenta',
            'start_date_reg',
            'start_date_otpusk',
            'end_date_otpusk',
            [
              'attribute' => 'id_sotrydnika',
              'header'=>'Сотрудники',
              'value' => function($data){
                   return $data->sotrydnik->second_name;
              },
              'contentOptions' => ['style'=>'width:100px;'],
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <table class="table table-bordered table-condensed">
        <tr>
            <th>#</th>
            <th>Номер документа</th>
            <th>Начало отпуска</th>
            <th>Конец отпуска</th>
            <th>Ид_сотрудника</th>
        </tr>
        <?foreach($payquery as $pay):?>
            <tr>
                <td><?=$pay['id_documenta'];?></td> 
                <td><?=$pay['nomer_documenta'];?></td> 
                <td><?=$pay['start_date_otpusk'];?></td>  
                <td><?=$pay['end_date_otpusk'];?></td>  
                <td><?=$pay['id_sotrydnika'];?></td>            
            </tr>
        <?endforeach?>
    </table>
</div>
