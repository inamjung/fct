<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
?>

<div class="box box-info">
    <div class="box-header"> </div>
    <div class="label label-primary"> V/S</div>
    <hr>
    <div class="box-body"> 
        
        <div class="row" style="display: none">
        <?= $form->field($model, 'hhclot')->label('เยี่ยมครั้งที่')->textInput(['maxlength' => true]) ?>
         </div>
        <div class="row">
            
            <div class="col-sm-offset-3 col-sm-6">

                <?=
                                $form->field($model, 'fctdate',['labelOptions'=>['style'=>'color:red']])->label('วันที่เข้าเยี่ยม *')->widget(\yii\jui\DatePicker::classname(), [
                                    'language' => 'th',
                                    'dateFormat' => 'yyyy-MM-dd',
                                    'clientOptions' => [
                                        'changeMonth' => true,
                                        'changeYear' => true,
                                    ],
                                    'options' => ['class' => 'form-control',
                                        'required' => ''
                                    ],
                                ]);
                                ?>
          
                <?= $form->field($model, 'home')->label('จำนวนสมาชิกในบ้าน/คน')->textInput(['maxlength' => true]) ?>
       
                <?= $form->field($model, 'homept')->label('ผู้ดูแล')->textInput() ?>
   
                <?= $form->field($model, 't')->label('อุณหภูมิร่างกาย(C)')->textInput(['maxlength' => true]) ?>
      
                <?= $form->field($model, 'pr')->label('PR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'rr')->label('RR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>
      
                <?= $form->field($model, 'bp')->label('BP(mmHg)')->textInput(['maxlength' => true]) ?>
            </div>   
            <div class="row">
                <div class="col-sm-offset-3 col-sm-4">
                    <?= $form->field($model, 'smoke')->label('การสูบบุรี่')->radioList(['ไม่เคยสูบ' => 'ไม่เคยสูบ', 'สูบ' => 'สูบ','เคยสูบแต่เลิกแล้ว' => 'เคยสูบแต่เลิกแล้ว']) ?>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-4">
                    <?= $form->field($model, 'alcohol')->label('การดื่มสุรา')->radioList(['ไม่เคยเดื่ม' => 'ไม่เคยเดื่ม', 'ดื่ม' => 'ดื่ม', 'ดื่มแต่เลิกแล้ว' => 'ดื่มแต่เลิกแล้ว']) ?>
                </div>
            </div>
        </div>
    </div>        
</div>