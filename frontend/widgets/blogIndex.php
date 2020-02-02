<?php
 
namespace frontend\widgets;
 
use Yii;
use yii\base\Widget;


class blogIndex extends Widget
{
 
    public function run()
    {
        return $this->render('blogindex', [
            'model' => $model,
        ]);
    }
 
}