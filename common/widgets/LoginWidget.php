<?php
 
namespace common\widgets;
 
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use common\models\LoginForm;
 
class LoginWidget extends Widget
{
    public function init() {
        parent::init();
    }

    public function run()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
}