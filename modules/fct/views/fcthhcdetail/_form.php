<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use yii\widgets\DetailView;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fcthhc-form">
    
    <?php
    $form = ActiveForm::begin(['id'=>'form1']);
    ?>
    
<ul class="nav nav-pills">
  <li class="active"><a href="#detail0" data-toggle="tab">ข้อมูลการเยี่ยม</a></li>
  
  <li><a href="#detail1" data-toggle="tab">อาการทั่วไป</a></li>
  <li><a href="#detail2" data-toggle="tab">ความรู้สึก/จิตใจ</a></li>
  <li><a href="#detail3" data-toggle="tab">ประเมินอุปกรณ์</a></li>
  <li><a href="#detail4" data-toggle="tab">ประเมินอวัยวะ</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                เยี่ยมหลังคลอด / ทารก <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#detailpp0" data-toggle="tab">แม่หลังคลอด</a></li>
                <li class="divider"></li>
                <li><a href="#detailpp1" data-toggle="tab">ทารก</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                พัฒนาการเด็ก <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#detailcd0" data-toggle="tab">0 - 5 ปี</a></li>
                <li class="divider"></li>
                <li><a href="#detailcd1" data-toggle="tab">6 - 14 ปี</a></li>
            </ul>
        </li>
  <li><a href="#detail5" data-toggle="tab">สรุปผลเยี่ยม</a></li>  
  
</ul>
    
<div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="detail0">
             <?php
            echo $this->render('fctdetail0',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
     <div class="tab-pane fade" id="detail1">
             <?php
            echo $this->render('fctdetail1',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
    <div class="tab-pane fade" id="detail2">
             <?php
            echo $this->render('fctdetail2',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
    <div class="tab-pane fade" id="detail3">
             <?php
            echo $this->render('fctdetail3',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
    <div class="tab-pane fade" id="detail4">
             <?php
            echo $this->render('fctdetail4',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
    <div class="tab-pane fade" id="detailpp0">
             <?php
            echo $this->render('fctdetailpp0',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
     <div class="tab-pane fade" id="detailpp1">
             <?php
            echo $this->render('fctdetailpp1',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
    <div class="tab-pane fade" id="detailcd0">
             <?php
            echo $this->render('fctdetailcd0',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
    <div class="tab-pane fade" id="detailcd1">
             <?php
            echo $this->render('fctdetailcd1',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
    </div>
    <div class="tab-pane fade" id="detail5">
             <?php
            echo $this->render('fctdetail5',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
    </div> 
</div>    
    
    <hr>
    <div class="box box-success">
        <div class="box-header"></div>
        <div class="box-body">
    
    

    <?php ActiveForm::end(); ?>

</div>
        </div>
    </div>
