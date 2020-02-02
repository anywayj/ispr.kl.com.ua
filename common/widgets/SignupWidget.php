<?php
 
namespace common\widgets;
 
use Yii;
use yii\base\Widget;
use frontend\models\SignupForm;
 
class SignupWidget extends Widget
{
 
    public function run()
    {
        $model = new SignupForm();
        $model->created_at = date("Y-m-d H:i:s");
        $model->updated_at = date("Y-m-d H:i:s");
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                Yii::$app->session->setFlash('success','Ви успішно зареєструвалися!');
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                } 
            } 
        } 

        return $this->render('SignupWidget', compact('model'));
    }
 
}