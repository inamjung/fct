<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\widgets\DetailView;
use kartik\checkbox\CheckboxX;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fcthhc-form">

    <?php $form = ActiveForm::begin(); ?>

    <ul class="nav nav-pills">
        <li class="active"><a href="#hhctab0" data-toggle="tab">ข้อมูลผู้ป่วย</a></li>
        <li><a href="#hhctab1" data-toggle="tab">อาการทั่วไป</a></li>
        <li><a href="#hhctab2" data-toggle="tab"> ประเมินความรู้สึก/จิตใจ</a></li>
        <li><a href="#hhctab3" data-toggle="tab"> ประเมินอุปกรณ์</a></li>
        <li><a href="#hhctab4" data-toggle="tab"> ประเมินอวัยวะ</a></li>
        
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
        
        <div class="tab-pane fade" id="all">
            <?php
            echo $this->render('hhctaball',[
                'model' => $model,
                'form' => $form
            ]);    
            ?>
        </div>
    </div>

<?php //echo $form->field($model, 'lr')->textInput(['maxlength' => true])  ?>    
                
    
<?php ActiveForm::end(); ?>

</div>
