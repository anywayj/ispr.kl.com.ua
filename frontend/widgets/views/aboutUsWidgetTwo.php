<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
 
Modal::begin([
    'header'=>'<h4>Ми забезпечуємо вищу освіту освітніх рівнів бакалавра і магістра за двома спеціальностями:</h4>',
    'id'=>'about-modal-two',
]);
?>

    124 - Системний аналіз. <br>

    126 - Інформаційні системи і технології. <br><br>

    Галузь знань: 12 - Інформаційні технології. <br>
    
    <div class="form-group">
        <div class="text-right">
             <button type="button" class="btn btn-primary" data-dismiss="modal">Cкасувати</button>
        </div>
    </div>
 
<?php

Modal::end();