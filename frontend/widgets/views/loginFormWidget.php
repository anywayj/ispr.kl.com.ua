<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
 
Modal::begin([
    'header'=>'<h4>Вхiд</h4>',
    'id'=>'login-modal',
]);
?>
 
    <p>Будь ласка, заповніть наступні поля для входу:</p>
 
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    //'class' => 'x-scroll',
    'enableAjaxValidation' => true,
    'action' => ['site/ajax-login'],
]);
echo $form->field($model, 'username')->textInput()->label('Логiн / e-mail');
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'rememberMe')->checkbox();
?>
 
    <div>
        Якщо Ви забули свій пароль, Ви можете його <?= Html::a('Відновити', ['site/request-password-reset']) ?>.
    </div>

    <div class="form-group">
        <div class="text-right">
            <?= Html::submitButton('Вхiд', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            <?= Html::a(Yii::t("app", "Реєстрація"), ["/site/signup"] , ['class' => 'btn btn-warning']) ?>
        </div>
    </div>
 
<?php
ActiveForm::end();
Modal::end();