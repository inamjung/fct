<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use kartik\checkbox\CheckboxX;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fct-form">
    
    <div class="fct-form">

    <?php
    $form = ActiveForm::begin(['id'=>'form1']);
    ?>
    
        
 <ul class="nav nav-pills">
        <li class="active"><a href="#hhctab0" data-toggle="tab">ข้อมูลผู้ป่วย</a></li>
        <li><a href="#hhctab1" data-toggle="tab">VitalSign</a></li>
        <li><a href="#hhctab2" data-toggle="tab"> ประเมินความรู้สึก/จิตใจ</a></li>
        <li><a href="#hhctab3" data-toggle="tab"> ประเมินอุปกรณ์</a></li>
        <li><a href="#hhctab4" data-toggle="tab"> ประเมิน ADL</a></li>
        
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                เยี่ยมหลังคลอด / ทารก <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#pp0" data-toggle="tab">แม่หลังคลอด</a></li>
                <li class="divider"></li>
                <li><a href="#pp1" data-toggle="tab">ทารก</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                พัฒนาการเด็ก <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#cd0" data-toggle="tab">0 - 5 ปี</a></li>
                <li class="divider"></li>
                <li><a href="#cd1" data-toggle="tab">6 - 14 ปี</a></li>
            </ul>
        </li>
    <li><a href="#all" data-toggle="tab"> สรุปผลการเยี่ยมครั้งนี้</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="hhctab0">
             <?php
            echo $this->render('fcthhctab0',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
        <div class="tab-pane fade" id="hhctab1">
            <?php
            echo $this->render('fcthhctab1',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
        <div class="tab-pane fade" id="hhctab2">
            <?php
            echo $this->render('fcthhctab2',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
        <div class="tab-pane fade" id="hhctab3">
            <?php
            echo $this->render('fcthhctab3',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
        <div class="tab-pane fade" id="hhctab4">
            <?php
            echo $this->render('fcthhctab4',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
        
        <div class="tab-pane fade" id="pp0">
            <?php
            echo $this->render('pp0',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
        <div class="tab-pane fade" id="pp1">
            <?php
            echo $this->render('pp1',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
        <div class="tab-pane fade" id="cd0">
            <?php
            echo $this->render('cd0',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
        <div class="tab-pane fade" id="cd1">
            <?php
            echo $this->render('cd1',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
        
        <div class="tab-pane fade" id="all">
            <?php
            echo $this->render('hhctaball',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
    </div>
        


<?php ActiveForm::end(); ?>



</div>



