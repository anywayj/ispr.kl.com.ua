<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
 
?>
 
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) { ?>
 
    <?php
    $this->registerJs(
        "$('#myModalSendOkLog').modal('show');",
        yii\web\View::POS_READY
    );
    ?>
 
    <!-- Modal -->
    <div class="modal fade" id="myModalSendOkLog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
<div class="modal fade" id="myModal-log" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
 
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h1 class="modal-title" id="myModalLabel">Вхiд</h1><br>
                <p>Будь ласка, заповніть наступні поля для входу:</p>
            </div>
            <div class="modal-body">
 
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логiн / e-mail') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div style="color:#999;margin:1em 0">
                        Якщо Ви забули свій пароль, Ви можете його <?= Html::a('Відновити', ['site/request-password-reset']) ?>.
                    </div>
 
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn-modal btn-info" data-dismiss="modal">Скасувати</button> -->
                <?= Html::submitButton('Вхiд', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                <?php // Html::a(Yii::t("app", "Реєстрація"), ["/site/signup"] , ['class' => 'btn-modal btn-warning']) ?>
                <a href="#" data-toggle = 'modal', data-target = '#myModal-sign', class="btn-modal btn-warning">Реєстрація</a>
            </div>
 
            <?php ActiveForm::end(); ?>
 
        </div>
    </div>
</div>