<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\helpers\Html;
use frontend\models\UploadImage;
use yii\web\UploadedFile;
use frontend\models\TestForm; //модель
class LabController extends Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionPage(){ //страница
        $model = new TestForm(); //модель
       
        if($model->load(Yii::$app->request->post())) {
                if($model->validate()) 
                {
                    Yii::$app->session->setFlash('success', 'Спасибо за регистрацию!');
                        if ($model->image = UploadedFile::getInstance($model, 'image')) 
                        {
                            $model->page();
                        }    
                } else 
                {
                    Yii::$app->session->setFlash('error', 'Не все поля заполнены');
                }
            }
        return $this->render('page', compact('model'));
    }
}           
        
              
              
    
