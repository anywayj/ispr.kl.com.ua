<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
 
?>
 
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) { ?>
 
    <?php
    $this->registerJs(
        "$('#myModalSendOkSing').modal('show');",
        yii\web\View::POS_READY
    );
    ?>
 
    <!-- Modal -->
    <div class="modal fade" id="myModalSendOkSign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Feedback form</h4>
                </div>
                <div class="modal-body">
                    <p>Thank you for contacting us. We will respond to you as soon as possible.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 
<?php } ?>
 
<!-- Modal -->
<div class="modal fade" id="myModal-sign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
 
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h1 class="modal-title" id="myModalLabel">Реєстрація</h1>
                <h3>Для доступу до повного функціоналу сайту<br>
                 Вам необхідно пройти просту процедуру реєстрації</h3>
                <p>Будь ласка, заповніть наступні поля:</p>
            </div>
            <div class="modal-body">
 
                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Номер студентського') ?>

                <?= $form->field($model, 'Student_surname') ?>

                <?= $form->field($model, 'email') ?>
                
                <?= $form->field($model, 'password')->passwordInput() ?>
 
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn-modal btn-info" data-dismiss="modal">Скасувати</button> -->
                <?= Html::submitButton('Зареєструватися', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                <?php // Html::a(Yii::t("app", "Повернутися"), ["/site/login"] , ['class' => 'btn btn-warning']) ?>
                <a href="#" data-toggle = 'modal', data-target = '#myModal-log', class="btn-modal btn-info">Повернутися</a>
            </div>
 
            <?php ActiveForm::end(); ?>
 
        </div>
    </div>
</div>