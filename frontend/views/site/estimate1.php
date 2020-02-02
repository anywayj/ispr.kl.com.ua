<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CurrentEstimatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Current Estimates';

?>
<div class="login-form">
    <div class="container">
    	<div><strong>Введiть найменування пiдприємства</strong><br>
            <div class="row">
                <div class="col-lg-6">
                    <input class="form-control" type="text" value="ПАТ «КЗТС»" style="font-weight: bold; color: #3c763d; margin-top: 10px; height: 41px; max-width: 388px">
                </div>
            </div>
        </div>

		<h2 class="text-center">Будь ласка, проставте оцiнку вiд 1 до 3 показникам, якi впливають на якiсть навчального процесу.<br>
			Показнику, який, на Ваш погляд, впливає максимально проставте 3, мiнiмально-1
		</h2>
		<div class="table-responsive">   
		    <table id="table" class="table table-bordered table-condensed"> 
		        <thead>
		                <tr>
		                    <th>Середнiй рейтинг абiтурiєнтiв</th>
		                    <th>Рiвень професорьско-викладацького складу кафедри</th>
		                    <th>Оцiнка випускної квалiфiкацiйної роботи студента</th>    
		                </tr>
		        </thead>
		        
		        <tbody class="contant1">	
		        	<tr>
		        		<td>3</td>
		        		<td>2</td>
		        		<td>1</td>
		        	</tr>
		        </tbody>
		    </table>    
		</div>	

        <input class="btn btn-primary" type="submit" value="Додати">
        

    </div>
</div>

