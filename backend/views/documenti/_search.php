<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DocumentiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documenti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id_documenta') ?>

    <?= $form->field($model, 'nomer_documenta') ?>

    <?= $form->field($model, 'start_date_reg') ?>

    <?= $form->field($model, 'start_date_otpusk') ?>

    <?= $form->field($model, 'end_date_otpusk') ?>

    <?php // echo $form->field($model, 'id_sotrydnika') ?>

    <?php // echo $form->field($model, 'id_otpyska') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
