<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<form class="form-horizontal">
<fieldset>
<div class="box box-info">
                    <div class="box-header"></div>
                    <div class="box-body">
    <div class="label label-danger"> 6 - 14 ปี</div><hr>
    
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'chlid614_bw')->label('น้ำหนัก ( กก. )')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
           <?= $form->field($model, 'chlid614_hg')->label('ส่วนสูง ( ซม.)')->textInput(['maxlength' => true]) ?>
        </div>
              
    </div>    
        <div class="row">       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <?= $form->field($model, 'child614_food')->label('โภชนาการ 6 - 14 ปี')->radioList([ 'ผอม' => 'ผอม', 'ค่อนข้างผอม' => 'ค่อนข้างผอม', 'สมส่วน' => 'สมส่วน',
                'ท้วม' => 'ท้วม', 'เริ่มอ้วน' => 'เริ่มอ้วน', 'อ้วน' => 'อ้วน']) ?>
        </div>        
    </div>     
</div>
</div> 
    </fieldset>
</form>