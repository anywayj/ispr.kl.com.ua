<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вхiд';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Будь ласка, заповніть наступні поля для входу:</p>

    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Увійти', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
