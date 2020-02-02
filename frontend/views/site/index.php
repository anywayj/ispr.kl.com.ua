<?php
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\assets\MyAsset;
use miloschuman\highcharts\Highcharts;

//MyAsset::register($this);
//AppAsset::register($this);
$this->title = 'Головна';
?>
    <div class="header">
        <div class="title">
            <div class="page-title" style="background-image: url(/images/slider/bg1.jpg); background-size: cover; height: 100%; padding-bottom: 1px;">
                <div class="main-logo">
                    <h1 class="logo">Кафедра IСПР</h1>
                </div>
                <h3 class="logo-text">Ми завжди виходимо за рамки наших можливостей</h3>
                <div class="large-title text-center">       
                    <p>Кафедра інтелектуальних систем прийняття рішень здійснює навчання студентів за спеціальностями «Системний аналіз» і «Інформаційні системи та технології», спеціалізаціями «Інтелектуальні системи прийняття рішень», «Інтернет-технології та web-дизайн», «Економічна кібернетика».</p>
                </div>  
            </div>
        </div>
    </div>
    <!--/#header-->
    
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>

    <section id="blog">
        <div class="blog container">
            <div class="row">
                <div class="col-md-8">
                    <?php foreach ($news as $k):?> 
                        <div class="blog-item">
                            <a href="#">
                                <?php if($k->image): ?>
                                    <img src="/photo/<?= $k->image ?>" alt="фото"/>
                                <?php else: ?>
                                    <img src="/photo/no-image.png" alt="но-фото"/>
                                <?php endif; ?>               
                            </a>
                            <div class="blog-content">
                                <!-- <a href="#" class="blog_cat"><?= $k->url ?></a> -->
                                <h2><a href="blog-item.html"><?= $k->title ?></a></h2>
                                <!-- <h3 class="blog-text"><?= $k->text ?></h3> -->
                                <h3>
                                    <?php 
                                        $string = $k->text;
                                        $string = strip_tags($string);
                                        $string = rtrim($string, "!,.-");
                                        $string = substr($string, 0, strrpos($string, ' '));
                                        echo substr($string, 0, 500).'...';
                                    ?>
                                </h3>
                                <a class="readmore" href="<?= $k->url ?>">Докладніше <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>  
                    <?php endforeach ?>    
                </div>
                <!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Шукайте тут">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--/.search-->
                    
                    <div class="widget archieve">
                        <h3>Категорії</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#">Сесія</a></li>
                                    <li><a href="#">Олімпіади</a></li>
                                    <li><a href="#">Позанавчальна діяльність</a></li>
                                <?php if (!Yii::$app->user->isGuest): ?>
                                    <li><a href="/site/grants"><b style="color: red;">Досягнення студентiв</b></a></li>
                                <?php endif; ?>
                                <?php if (Yii::$app->user->can('canAdmin')): ?>
                                    <li><a href="/site/quality"><b style="color: red;">Якiсть освiти</b></a></li>
                                <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.archieve-->
                    <div class="widget popular_post">
                        <h3>Популярні пости</h3>
                        <?php foreach ($news as $k):?>
                            <ul>
                                <li>
                                    <a href="#">
                                        <?php if($k->image): ?>
                                            <img src="/photo/<?= $k->image ?>" alt="фото"/>
                                        <?php else: ?>
                                            <img src="/photo/no-image.png" alt="но-фото"/>
                                        <?php endif; ?>
                                        <p><?= $k->title ?></p>
                                    </a>
                                </li>
                            </ul>
                        <?php endforeach ?>
                    </div>
                    <!--/.archieve-->
                    
                    <div class="widget blog_gallery">
                        <h3>Наша галерея</h3>
                            <ul class="sidebar-gallery clearfix">
                                <?php foreach ($news_gallery as $k):?>
                                    <li>
                                        <a href="#">
                                            <?php if($k->image): ?>
                                                <img src="/photo/<?= $k->image ?>" height="100px" width="150px" alt="фото"/>
                                            <?php else: ?>
                                                <img src="/photo/no-image.png" alt="но-фото"/>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                    </div>
                    <!--/.blog_gallery-->
                    
                    <div class="widget social_icon">
                        <a href="https://www.facebook.com/groups/dgma.ispr"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/ispr_dgma"><i class="fa fa-twitter"></i></a>
                        <a href="https://plus.google.com/communities/102520437869351762026"><i class="fa fa-google-plus"></i></a>
                        <a href="https://t.me/ispr_dgma"><i class="fa fa-telegram"></i></a>
                        <a href="#" class="fa fa-github"></a>
                    </div>
                    
                </aside>
            </div>

            <!--/.row-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul>
                        <?= LinkPager::widget([
                        'pagination'=>$pagination_news,
                        'prevPageLabel'=>'<i class="fa fa-long-arrow-left"></i>',
                        'nextPageLabel'=>'<i class="fa fa-long-arrow-right"></i>',
                        ]) ?>
                    </ul>
                    <!--/.pagination-->
                </div>
            </div>


        </div>
    </section>
    <!--/#blog-->

    <!-- <section id="bottom">
        <div class="container fadeInDown fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" class="footer-logo">
                        <img src="/images/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Company</h3>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">We are hiring</a></li>
                                    <li><a href="#">Meet the team</a></li>
                                    <li><a href="#">Copyright</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        /.col-md-3
    
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Support</h3>
                                <ul>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Forum</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Refund policy</a></li>
                                    <li><a href="#">Ticket system</a></li>
                                    <li><a href="#">Billing system</a></li>
                                </ul>
                            </div>
                        </div>
                        /.col-md-3
    
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Developers</h3>
                                <ul>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">SEO Marketing</a></li>
                                    <li><a href="#">Theme</a></li>
                                    <li><a href="#">Development</a></li>
                                    <li><a href="#">Email Marketing</a></li>
                                    <li><a href="#">Plugin Development</a></li>
                                    <li><a href="#">Article Writing</a></li>
                                </ul>
                            </div>
                        </div>
                        /.col-md-3
    
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Our Partners</h3>
                                <ul>
                                    <li><a href="#">Adipisicing Elit</a></li>
                                    <li><a href="#">Eiusmod</a></li>
                                    <li><a href="#">Tempor</a></li>
                                    <li><a href="#">Veniam</a></li>
                                    <li><a href="#">Exercitation</a></li>
                                    <li><a href="#">Ullamco</a></li>
                                    <li><a href="#">Laboris</a></li>
                                </ul>
                            </div>
                        </div>
                        /.col-md-3
                    </div>
                </div>
    
    
            </div>
        </div>
    </section> -->
    <!--/#bottom-->


