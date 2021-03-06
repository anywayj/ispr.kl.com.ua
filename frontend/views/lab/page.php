<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use kartik\file\FileInput;
use borales\extensions\phoneInput\PhoneInput;
use yii\widgets\MaskedInput;
?>
<div class="row">
<div class="col-lg-6">

			<?php $form = ActiveForm::begin() ?>
			<?=
				$form->field($model, 'text')->widget(CKEditor::className(), [
				    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[]),
				]);
			?>
			<?php ActiveForm::end() ?>


		    <?= $form->field($model, 'phone')->label('Введите телефон')->widget(PhoneInput::className(), [
			    'jsOptions' => [
			        'preferredCountries' => ['ua'],
			    ]
				]); 
			?>

			<?= yii\jui\DatePicker::widget(['name' => 'attributeName']) //календарик ?> 

		</div>
        <div class="col-lg-6">
			<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class' => 'someclass'], 'id' => 'edit-form']) ?>		

			<?= $form->field($model, 'name')->label('Введите имя'); ?>
			<?= $form->field($model, 'last_name')->label('Введите фамилию'); ?>
			<?= $form->field($model, 'password')->passwordInput()->label('Введите пароль'); ?>
			<?= $form->field($model, 'email')->label('Введите почту'); ?>

			<?=$form->field($model, 'image')->widget(FileInput::classname(), [ 
    'options' => ['accept' => 'image/*'],
			])->label('Фото (png, jpg)')->hint('Не обязательно, но с ним проверка ваших данных будет на много быстрее'); ?> <?php //загрузка картинки?>
			
			<?= Html::submitButton('Отправить', ['class' => 'btn btn-success', 'data-confirm']) ?>
			
			<?php ActiveForm::end() ?>

			<?php if($model->image):  /*вывод загруженного изображения на экран*/ ?>
				<img class="image1" src="/uploads/<?= $model->image?>" alt="">
			<?php endif; ?>

			<?php $form = ActiveForm::begin() ?>
			<?= $form->field($model, 'image')->fileInput() ?>
			<button>Загрузить</button>
			<?php ActiveForm::end() ?>
		
		</div>
	
</div>



