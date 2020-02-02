<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\assets\AppAsset;
use frontend\assets\MyAsset;
use common\models\Students;
?>



<!-- Форма для отправки данных -->
<div class="login-form">
	<div class="container" id="entry">
		<div class="row">
			<div class="col-lg-6">
		<?php $form = ActiveForm::begin(); ?>

		    <?= $form->field($modelf, 'disc')->label('Дисципліна')
			    ->dropDownList(\yii\helpers\ArrayHelper::map(common\models\Disciplines::find()->all(), 'Discipline_id', 'Discipline_name'),
			    [
			        'prompt' => 'Виберіть дисципліну',
			    ]
			    ) ?>
			</div>
			<div class="col-lg-6">    
		    <?= $form->field($modelf, 'group')->label('Група')
			    ->dropDownList(\yii\helpers\ArrayHelper::map(common\models\GroupAcademy::find()->all(), 'Group_id', 'Group_name'),
			    [
			        'prompt' => 'Виберіть групу',
			    ]
			    ) ?>
			</div>
			<div class="col-lg-6">    
			<?= $form->field($modelf, 'raitingstart')->label('Дата початку 1') ?>
			</div>
			<div class="col-lg-6">
			<?= $form->field($modelf, 'raitingend')->label('Дата кiнца 1') ?>
			</div>
			<div class="col-lg-6">    
			<?= $form->field($modelf, 'raitingstart1')->label('Дата початку 2') ?>
			</div>
			<div class="col-lg-6">
			<?= $form->field($modelf, 'raitingend1')->label('Дата кiнца 2') ?>
			</div>
		</div>
		    <div class="form-group">
		        <?= Html::submitButton('Показати таблицю', 
		        	['class' => 'btn btn-primary']) ?>
		    </div>

		<?php ActiveForm::end(); ?>
	</div>
</div>