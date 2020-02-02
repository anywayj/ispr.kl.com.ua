
<?php 

$this->title = 'Про нас';

use frontend\widgets\AboutUsWidget;
use frontend\widgets\AboutUsWidgetTwo;
?>

<?= AboutUsWidget::widget([]) ?>
<?= AboutUsWidgetTwo::widget([]) ?>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Можливі форми навчання:</h1>
                                    <div class="animation animated-item-2">
                                        <ul style="padding: 0;">
                                            <li> <p><i class="fa fa-eye"></i> очна (прийом на 1-й курс після закінчення 11 класів);</p></li>
                                            <li> <p><i class="fa fa-forward"></i> очна прискорена (прийом на 3-й курс після закінчення технікуму / коледжу);</p></li>
                                            <li> <p><i class="fa fa-eye-slash"></i> заочно-дистанційна прискорена (прийом на 3-й курс після закінчення технікуму / коледжу).</p></li>
                                        </ul>
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="http://www.dgma.donetsk.ua/~kiber/spec.htm">Докладніше про спеціальності</a>
                                    <a class="btn-slide white animation animated-item-3" data-toggle = 'modal', data-target = '#about-modal' href="#">Цікаві факти</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(/images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Спеціалізації:</h1>
                                    <div class="animation animated-item-2">
                                        <ul style="padding: 0;">
                                            <li> <p><i class="fa fa-cloud-upload"></i> інтелектуальні системи прийняття рішень;</p></li>
                                            <li> <p><i class="fa fa-desktop"></i> інтернет-технології та web-дизайн;</p></li>
                                            <li> <p><i class="fa fa-graduation-cap"></i> економічна кібернетика.</p></li>
                                        </ul>
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="http://www.dgma.donetsk.ua/~kiber/science.htm">Наша гордість</a>
                                    <a class="btn-slide animation animated-item-3" href="#" data-toggle = 'modal', data-target = '#about-modal-two'>Спецiальностi</a>
                                </div>
                            </div>
                
                
                        </div>
                    </div>
                </div>
                
                <div class="item" style="background-image: url(/images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Кваліфікації:</h1>
                                    <div class="animation animated-item-2">
                                        <ul style="padding: 0;">
                                            <li><p><i class="fa fa-file-text"></i> бакалавр системного аналізу;</p></li>
                                            <li><p><i class="fa fa-flag"></i> магістр системного аналізу;</p></li>
                                            <li><p><i class="fa fa-graduation-cap"></i> бакалавр інформаційних систем і технологій;</p></li>
                                            <li><p><i class="fa fa-cloud-upload"></i> магістр інформаційних систем і технологій;</p></li>
                                            <li><p><i class="fa fa-comments"></i> аналітик комп'ютерних систем.</p></li>
                                        </ul>
                                    </div>

                                    <a class="btn-slide animation animated-item-3" href="http://www.dgma.donetsk.ua/~kiber/isbn.htm">Навчальні посібники</a>
                                    <a class="btn-slide white animation animated-item-3" href="http://www.dgma.donetsk.ua/~kiber/vypusk.htm">Наші випускники</a>
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>  

                <!--/.item-->
                
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <!-- <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev"> -->
        <a class="prev" href="#main-slider" data-slide="prev">    
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <section id="recent-works">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Новини</h2>
                <p class="lead">Кафедра інтелектуальних систем прийняття рішень Донбаської державної машинобудівної академії здійснює навчання студентів за спеціальностями «Системний аналіз» і «Інформаційні системи та технології», спеціалізаціями «Інтелектуальні системи прийняття рішень», «Інтернет-технології та web-дизайн», «Економічна кібернетика»</p>
            </div>
        
            
        
            <div class="row">
                <?php foreach ($about_gallery as $k):?>
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <?php if($k->image): ?>
                            <img src="/photo/<?= $k->image ?>" height="310px" width="390px" alt="фото"/>
                        <?php else: ?>
                            <img src="/photo/no-image.png" height="310px" width="390px" alt="но-фото"/>
                        <?php endif; ?>
                        <!-- <img class="img-responsive" src="/images/portfolio/item-1.png" alt=""> -->
                        <!-- <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="/images/portfolio/item-1.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <?php endforeach ?>    
                <!-- <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="/images/portfolio/item-2.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="/images/portfolio/item-2.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="/images/portfolio/item-3.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="/images/portfolio/item-3.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="/images/portfolio/item-4.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="/images/portfolio/item-4.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="/images/portfolio/item-5.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="/images/portfolio/item-5.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="/images/portfolio/item-6.png" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="/images/portfolio/item-6.png" rel="prettyPhoto"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!--/.row-->
            <div class="clearfix text-center">
                <br>
                <br>
                <a href="#" class="btn btn-primary">Показати більше</a>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#recent-works-->




    