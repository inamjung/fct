<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<div class="box box-info">
    <div class="box-header"> </div><div class="label label-primary"> V/S</div><hr>
    <div class="box-body">
<div class="row">
        
        <div class="col-sm-offset-2 col-sm-1" style="display: none">
            <?= $form->field($model, 'hhclot')->label('เยี่ยมครั้งที่')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
             <?= $form->field($model, 'fctdate')->label('วันที่เข้าเยี่ยม')->widget(\yii\jui\DatePicker::className(),[
        'language'=>'th',
        'dateFormat'=>'yyyy-MM-dd',
        'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control',
                //'disabled' => true
            ],
    ]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'home')->label('จำนวนสมาชิกในบ้าน/คน')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'homept')->label('ผู้ดูแล')->textInput() ?>
        </div>
    </div>
    <div class="row">         
       <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 't')->label('อุณหภูมิร่างกาย(C)')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'pr')->label('PR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
            <?= $form->field($model, 'rr')->label('RR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2">
             <?= $form->field($model, 'bp')->label('BP(mmHg)')->textInput(['maxlength' => true]) ?>
        </div>        
    </div>
                 </div>        
    </div>