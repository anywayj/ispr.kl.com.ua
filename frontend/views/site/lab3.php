<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="login-form">
	<div class="container">
		<?php $form = ActiveForm::begin(); ?>
	<div class="row">
		<div class="col-md-4">

		    <div><?= $form->field($model, 'start_capital')->label('Вложения на начальном этапе: '); ?></div>

			<div><?= $form->field($model, 'spros_high')->label('Вероятность, что спрос будет высоким в 1-й год: '); ?></div>

			<div><?= $form->field($model, 'spros_high_max')->label('Высокий спрос: '); ?></div>

			<div><?= $form->field($model, 'spros_high_min')->label('Низкий спрос: '); ?></div>

			<div><?= $form->field($model, 'spros_low_max')->label('Высокий спрос: '); ?></div>

		</div>
		<div class="col-md-4">
			
			<div><?= $form->field($model, 'spros_low_min')->label('Низкий спрос: '); ?></div>

			<div><?= $form->field($model, 'high_dohod')->label('При высоком спросе прогнозируемые доходы: '); ?></div>

			<div><?= $form->field($model, 'low_dohod')->label('При низком спросе прогнозируемые доходы: '); ?></div>

			<div><?= $form->field($model, 'prognoz')->label('Затраты, прогнозируются в размере: '); ?></div>

			<div><?= $form->field($model, 'bezrisk_osnova')->label('Вложить их на практически безрисковой основе: '); ?></div>

		</div>
		<div class="col-md-4">

			<div><?= $form->field($model, 'years')->label('Срок морального устаревания: '); ?></div>

			<div><?= $form->field($model, 'zatrati')->label('Затраты из первоначальных расходов: '); ?></div>

			<div><?= $form->field($model, 'rashodi')->label('Ежегодные расхды на эксплуатацию: '); ?></div>

			<div><?= $form->field($model, 'arenda')->label('Затраты на аренту: '); ?></div>

			<div><?= $form->field($model, 'ogovor_rashodi')->label('Постоянные расходы: '); ?></div>

		</div>
	</div>

		<div class="form-group">
        	<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
   		</div>
		
		<?php ActiveForm::end(); ?>

		<?php if ($model->load(Yii::$app->request->post()) && $model->validate()): ?>

			<div class="table-responsive">   
			    <table id="table" class="table table-bordered table-condensed"> 
			        <thead>
			            <tr>
			                <th>Сервер</th>
			                <th>Спрос в 1 год</th>
			                <th>Спрос во 2-3 год</th>    
			                <th>Прибыль</th>
			            </tr>
			        </thead>
			        <tbody>
						<tr>
							<td rowspan="4">Покупать</td>
							<td>Высокий</td>
							<td>Высокий</td>
							<td>
<?= $x1[] = ceil(($model->high_dohod * $model->years) - ($model->prognoz * $model->years) - $model->zatrati - $model->rashodi * $model->years); ?>
							</td>
						</tr>
						<tr>
							<td>Высокий</td>
							<td>Низкий</td>
							<td>
<?= $x1[] = ceil(($model->high_dohod + $model->low_dohod * ($model->years-1)) - ($model->prognoz * $model->years) - $model->zatrati - $model->rashodi * $model->years); ?>								
							</td>
						</tr>
						<tr>
							<td>Низкий</td>
							<td>Высокий</td>
							<td>
<?= $x1[] = ceil(($model->low_dohod + $model->high_dohod * ($model->years-1)) - ($model->prognoz * $model->years) - $model->zatrati - $model->rashodi * $model->years); ?>								
							</td>
						</tr>
						<tr>
							<td>Низкий</td>
							<td>Низкий</td>
							<td>
<?= $x1[] = ceil(($model->low_dohod  * $model->years) - ($model->prognoz * $model->years) - $model->zatrati - $model->rashodi * $model->years); ?>
							</td>
						</tr>

						<tr>
							<td rowspan="4">Продавать</td>
							<td>Высокий</td>
							<td>Высокий</td>
							<td>
<?= $x1[] = ceil((($model->high_dohod  * $model->years) - ($model->prognoz * $model->years)) * (1 - $model->arenda)); ?>
							</td>
						</tr>
						<tr>
							<td>Высокий</td>
							<td>Низкий</td>
							<td>
<?= $x1[] = ceil((($model->high_dohod + $model->low_dohod * ($model->years-1)) - ($model->prognoz * $model->years)) * (1 - $model->arenda)); ?>
							</td>
						</tr>
						<tr>
							<td>Низкий</td>
							<td>Высокий</td>
							<td>
<?= $x1[] = ceil((($model->low_dohod + $model->high_dohod * ($model->years-1)) - ($model->prognoz * $model->years)) * (1 - $model->arenda)); ?>
							</td>
						</tr>
						<tr>
							<td>Низкий</td>
							<td>Низкий</td>
							<td>
<?= $x1[] = ceil((($model->low_dohod  * $model->years) - ($model->prognoz * $model->years)) * (1 - $model->arenda)); ?>
							</td>
						</tr>
			        </tbody>
			    </table>
			</div>        
				


<?php 
$x2[] = ceil(($x1[0] * $model->spros_high_max) + ($x1[1] * $model->spros_high_min));
$x2[] = ceil(($x1[2] * $model->spros_low_max) + ($x1[3] * $model->spros_low_min));
$x2[] = ceil(($x1[4] * $model->spros_high_max) + ($x1[5] * $model->spros_high_min));
$x2[] = ceil(($x1[6] * $model->spros_low_max) + ($x1[7] * $model->spros_low_min));
$x3[] = ceil(($x2[0] * $model->spros_high_max) + ($x2[1] * $model->spros_high_min));
$x3[] = ceil(($x2[2] * $model->spros_high_max) + ($x2[3] * $model->spros_high_min));
$x4[] = max($x3);
$x4[] = ceil($model->start_capital * $model->bezrisk_osnova * $model->years + $model->start_capital);
	if($x4[0] > $x4[1]) {
		$red1 = 'rectangle-red';
		if($x3[0] > $x3[1]) {
			$red3 = 'rectangle-red';
		} else {
			$red4 = 'rectangle-red';
		}
	} else {
		$red2 = 'rectangle-red';
	}
	$pribil = max($x4) - $model->start_capital;
?>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x1[0] ?></p></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x2[0] ?></p></div>
			</div>
			<div class="col-md-2"></div>
		</div>		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x1[1] ?></p></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle <?= $red3 ?>"><p><?= $x3[0] ?></p></div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
			</div>
		</div>		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x1[2] ?></p></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">Покупать</div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x2[1] ?></p></div>
			</div>
			<div class="col-md-2"></div>
		</div>	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x1[3] ?></p></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle <?= $red1 ?>"><p><?= $x4[0] ?></p></div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x1[4] ?></p></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">Консалдинг</div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x2[2] ?></p></div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">Арендовать</div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x1[5] ?></p></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= '-'.$model->start_capital ?></p></div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle <?= $red4 ?>"><p><?= $x3[1]  ?></p></div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x1[6] ?></p></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x2[3] ?></p></div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">Безрисковая основа</div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle"><p><?= $x1[7] ?></p></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<div class="rectangle <?= $red2 ?>"><p><?= $x4[1] ?></p></div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
		</div>

	<div class='alert alert-success'>
		<span>В итоге получаем чистой прибыли = <b><?= $pribil ?></b> тыс.долл.</span><br>
		<?php $biznes = '520'; $proc = '100' ?>
		<span>Процент доходности за 4 года = <b><?= number_format((pow($biznes/$model->start_capital, 1/$model->years)-1)*$proc,2,'.', '').'%' ?></b></span>
		
	</div>
	
		<?php endif; ?>
	</div>

</div>