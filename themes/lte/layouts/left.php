<?php

use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use yii\helpers\Url;
use dektrium\user\models\User;
use yii\helpers\Html;
?>


<aside class="main-sidebar">
    <section class="sidebar">
        <?php if(!Yii::$app->user->isGuest){ ?> 
        <div class="pull-left image">
                <?= Html::img('avatars/' . Yii::$app->user->identity->avatar,
                        ['class' => 'img-circle', 'width' => '40px;'])
                ?>                

            </div>
        <?php } ?>
        <br>
         <?=
        Nav::widget(
                [
                    'encodeLabels' => false,
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        '<li class="header"></li>',
                        Yii::$app->user->isGuest ?
                                ['label' => '<i class="glyphicon glyphicon-log-in"></i> เข้าสู่ระบบ', 'url' => ['/user/security/login']] :
                                ['label' => 'ผู้ใช้งาน (' . Yii::$app->user->identity->username . ')', 'items' => [
                                ['label' => 'ข้อมูลส่วนตัว', 'url' => ['/users/indexuser']],

                                ['label' => 'ออก', 'url' => ['/user/security/logout'], 'linkOptions' => ['data-method' => 'post']],
                            ]],
                    ],
                ]
        );
        ?>
        <hr>
        

    </section>

</aside>
