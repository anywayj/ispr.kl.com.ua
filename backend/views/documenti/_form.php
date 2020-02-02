<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Documenti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documenti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomer_documenta')->textInput() ?>

    <?= $form->field($model, 'start_date_reg')->textInput() ?>

    <?= $form->field($model, 'start_date_otpusk')->textInput() ?>

    <?= $form->field($model, 'end_date_otpusk')->textInput() ?>

    <?= $form->field($model, 'id_sotrydnika')->textInput() ?>

    <?= $form->field($model, 'id_otpyska')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
