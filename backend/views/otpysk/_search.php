<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OtpyskSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otpysk-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php// $form->field($model, 'id_otpyska') ?>

    <?= $form->field($model, 'tip_otpyska') ?>

    <?= $form->field($model, 'oplata_otpyska') ?>

    <?= $form->field($model, 'lgoti_po_otpysky') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
