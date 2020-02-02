<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
//$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Slider Section -->
    <div id="slider-section" class="slider-section container-fluid no-padding">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/images/slider111.jpg" alt="slide1" width="100%" height="100%"/>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="col-md-5 col-sm-6 col-xs-9 pull-right">
                                <div class="slider-content-box">
                                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                                        <h3 class="slider-title">Beats all you've ever saw been in trouble with the law</h3>
                                        <span>January 03-07</span>
                                        <p>09, Design Street, New York, NY- 10001, United States </p>
                                    </div>
                                    <div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding">
                                        <img src="/images/slider-thumb1.jpg" alt="slider-thumb" width="74" height="74"/>
                                        <h3>Daniel Lesner<span>Public Speaker</span></h3>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                                        <a href="#" title="Register now">Register Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/slider222.jpg" alt="slide2" width="1920" height="770"/>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="col-md-5 col-sm-6 col-xs-9 pull-right">
                                <div class="slider-content-box">
                                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                                        <h3 class="slider-title">International Academic Business Conference Orlando</h3>
                                        <span>January 15-19</span>
                                        <p>09, Design Street, New York, NY- 10001, United States</p>
                                    </div>
                                    <div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding">
                                        <img src="/images/slider-thumb2.jpg" alt="slider-thumb" width="74" height="74"/>
                                        <h3>Dwayne Johnson<span>Business Speaker</span></h3>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                                        <a href="#" title="Register now">Register Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="/images/slider333.jpg" alt="slide3" width="1920" height="770"/>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="col-md-5 col-sm-6 col-xs-9 pull-right">
                                <div class="slider-content-box">
                                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                                        <h3 class="slider-title">Well the first thing you know ol' Jeds a millionaire</h3>
                                        <span>January 27-30</span>
                                        <p>09, Design Street, New York, NY- 10001, United States </p>
                                    </div>
                                    <div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding">
                                        <img src="/images/slider-thumb3.jpg" alt="slider-thumb" width="74" height="74"/>
                                        <h3>David Warner<span>Public Speaker</span></h3>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                                        <a href="#" title="Register now">Register Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <div class="container">
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div><!-- Slider Section /- -->
