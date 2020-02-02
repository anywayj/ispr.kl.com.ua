<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Otpysk */

$this->title = 'Create Otpysk';
$this->params['breadcrumbs'][] = ['label' => 'Otpysks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="otpysk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
