<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Реєстрація';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="sign">
    <div class="sign-form">
        <div class="container">
            <div class="row">
            <?php if( Yii::$app->session->hasFlash('error') ): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('error'); ?>
                </div>
            <?php endif;?>
            <h1 style="padding-left: 15px;"><?= Html::encode($this->title) ?></h1>
                <div class="col-lg-5">
                    
                    <h3>Для доступу до повного функціоналу сайту<br>
                     Вам необхідно пройти просту процедуру реєстрації</h3>
                    <p>Будь ласка, заповніть наступні поля:</p><br>
                    
                            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Номер студентського') ?>

                                <?= $form->field($model, 'Student_surname') ?>

                                <?= $form->field($model, 'email') ?>
                                
                                <?= $form->field($model, 'password')->passwordInput() ?>

                                <?php // $form->field($model, 'created_at')->textInput()  ?>

                                <?php // $form->field($model, 'updated_at')->textInput()  ?>

                                <div class="form-group">
                                <?= Html::submitButton('Зареєструватися', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                                <?php // Html::a(Yii::t("app", "Повернутися"), ["/site/login"] , ['class' => 'btn btn-warning']) ?>
                                </div>

                            <?php ActiveForm::end(); ?>
                </div>
                <div class="col-lg-offset-1 col-lg-6 img-pa">
                    <div class="row">
                        <div class="portfolio-items">
                            <?php foreach ($sign_gallery as $k):?>
                                <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-4 single-work">
                                    <div class="recent-work-wrap">
                                            <?php if($k->image): ?>
                                                <img class="img-responsive1" src="/photo/<?= $k->image ?>" height="195px" width="195px" alt="фото"/>
                                            <?php else: ?>
                                                <img class="img-responsive1" src="/photo/no-image.png" height="195px" width="195px" alt="но-фото"/>
                                            <?php endif; ?>    
                                    </div>
                                </div>  
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
            

        
            <div class="row">
                <div class="col-sm-12 fadeInDown">
                    <div class="center">
                <h1>Нашi досягнення</h1><br>
                <p class="lead">Кафедра інтелектуальних систем прийняття рішень Донбаської державної машинобудівної академії здійснює навчання студентів за спеціальностями «Системний аналіз» і «Інформаційні системи та технології», спеціалізаціями «Інтелектуальні системи прийняття рішень», «Інтернет-технології та web-дизайн», «Економічна кібернетика»</p>
                    </div>
                </div>
                <!--/.col-sm-6-->

                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>Працевлаштування</h3>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="bar-width">85%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Призові місця</h3>
                        <div class="progress">
                            <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="bar-width">95%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="progress-wrap">
                        <h3>Корисна інформація</h3>
                        <div class="progress">
                            <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="bar-width">80%</span>
                            </div>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h3>Дизайн</h3>
                        <div class="progress">
                            <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                <span class="bar-width">90%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <section id="services" class="service-item">
            <div class="row">

                <div class="col-sm-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="/images/services/web.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Інтелектуальні системи прийняття рішень</h3>
                            <p>Проектирование и программирование систем поддержки принятия решений с использованием методов искусственного интеллекта</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="/images/services/ux.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Інтернет-технології та web-дизайн</h3>
                            <p>Розробка інформаційних систем з впровадженням web-технологій, інтернет-програмування та електронна комерція</p>
                        </div>
                    </div>
                </div>

                
                

                <div class="col-sm-4">
                    <div class="media services-wrap fadeInDown">
                        <div class="pull-left">
                            <img class="img-responsive" src="/images/services/mobile-ui.svg">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Економічна кібернетика</h3>
                            <p>Моделювання фінансово-економічних процесів, розробка інформаційних систем в економічній сфері</p>
                        </div>
                    </div>
                </div>

                
            </div>
            <!--/.row-->
        </section>
        <!--/#services-->

        </div>
    </div>
</div>


