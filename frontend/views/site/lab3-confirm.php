<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="login-form">
	<div class="container">
		

		<?php if ($model->load(Yii::$app->request->post()) && $model->validate()): ?>

			<p>Вы ввели следующую информацию:</p>

			<ul>
				<li><label>Число</label>: <?= Html::encode($model->key) ?></li>
			</ul>

		<?php endif; ?>
	</div>

</div>