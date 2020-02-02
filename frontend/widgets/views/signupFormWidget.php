<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
 
Modal::begin([
    'header'=>'<h4>Реєстрація</h4>',
    'id'=>'signup-modal',
]);
?>
 
    <h3>Для доступу до повного функціоналу сайту<br>
     Вам необхідно пройти просту процедуру реєстрації</h3>
    <p>Будь ласка, заповніть наступні поля:</p>
 
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'enableAjaxValidation' => true,
    'action' => ['site/ajax-signup'],
]);

echo $form->field($model, 'username')->textInput()->label('Номер студентського');
echo $form->field($model, 'Student_surname');
echo $form->field($model, 'email');              
echo $form->field($model, 'password')->passwordInput();


?>

    <div class="form-group">
        <div class="text-right">
            <?= Html::submitButton('Зареєструватися', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            <?= Html::a(Yii::t("app", "Реєстрація"), ["/site/signup"] , ['class' => 'btn btn-warning']) ?>
        </div>
    </div>
 
<?php
ActiveForm::end();
Modal::end();