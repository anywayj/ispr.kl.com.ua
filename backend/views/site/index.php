<?php
use yii\helpers\Html;
use kartik\sidenav\SideNav;
/* @var $this yii\web\View */
$this->title = 'Главная';

?>

<!--<div>Ид=<?=Yii::$app->user->id?>; Вы <?=Yii::$app->user->identity->username?></div> -->
<?php //if (\Yii::$app->user->can('updatePost', ['author_id' => $model->user_id])): ?>
    <!-- видит только создатель поста и админ, который наследует его -->
<div class="site-index">

   <h3 class="text-center">Вы вошли как <b><?= Yii::$app->user->identity->username ?></b></h3>
        
<?php /*

            
                 
            echo SideNav::widget([
                'type' => SideNav::TYPE_DEFAULT,
                'heading' => 'Options',
                'items' => [
                    [
                        'url' => '#',
                        'label' => 'Home',
                        'icon' => 'home'
                    ],
                    [
                        'label' => 'Help',
                        'icon' => 'question-sign',
                        'items' => [
                            ['label' => 'About', 'icon'=>'info-sign', 'url'=>'#'],
                            ['label' => 'Contact', 'icon'=>'phone', 'url'=>'#'],
                        ],
                    ],
                ],
            ]);
                

?>
    </div>

</div>

<?php// endif; */?>