<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Otpysk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otpysk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tip_otpyska')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oplata_otpyska')->textInput() ?>

    <?= $form->field($model, 'lgoti_po_otpysky')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
