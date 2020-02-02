<?php

use yii\helpers\Html;

?>

<div class="login-form">
    <div class="container">
      <section id="team-area">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Викладачі кафедри IСПР</h2>
                <p class="lead">Кафедра інтелектуальних систем прийняття рішень</p>
            </div>
            <div class="row">
              <?php foreach($teachers as $k): ?>
                <div class="col-md-4 col-sm-6 single-team">
                    <div class="inner">
                        <div class="team-img">
                            <?php if($k->image): ?>
                                <!-- <img src="/teachers/tech/<?= $k->image ?>" alt="фото"/> -->
                                <img src="/teachers/<?= $k->image ?>" width="360px" height="360px" alt="фото"/>
                            <?php else: ?>
                                <img src="/teachers/no-image.png" alt="но-фото"/>
                            <?php endif; ?>
                        </div>
                        <div class="team-content">
                            <h4><?= $k->Teacher_FIO ?></h4>
                            <i>
                                <?php if($k->fixationByRankTeacher->ranks->Rank_name != NULL): ?>
                                <span class="ranks"><?= $k->fixationByRankTeacher->ranks->Rank_name ?><br></span> 
                                <?php else: ?>
                                <span> &mdash; </span> <br>
                                <?php endif ?>
                            </i><br>
                            <span class="desg"><b><?= $k->fixationByPositionTeacher->pos->Position_name ?></b></span>
                            
                            <!-- <div class="team-social">
                                <a class="fa fa-facebook" href="#"></a>
                                <a class="fa fa-twitter" href="#"></a>
                                <a class="fa fa-linkedin" href="#"></a>
                                <a class="fa fa-pinterest" href="#"></a>
                            </div> -->
                        </div>
                    </div>
                </div>
              <?php endforeach?>
            </div>
        </div>
    </section>
  </div>
</div>
