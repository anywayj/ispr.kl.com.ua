<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
 
?>

 
<!-- Modal -->
<div class="modal fade" id="readmore" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
 
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
 
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Форма зворотного зв'язку12</h4>
            </div>
            <div class="modal-body">
 
                    feef
 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>

            </div>
 
            <?php ActiveForm::end(); ?>
 
        </div>
    </div>
</div>