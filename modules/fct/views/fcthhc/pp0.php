<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<form class="form-horizontal">
<fieldset>
<div class="box box-danger">
                    <div class="box-header"></div>
                    <div class="box-body">
    <div class="label label-danger"> ประเมินหลังคลอด</div><hr>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr01')->label('แผลฝีเย็บ')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'lr02')->label('การดูแล')->textInput(['maxlength' => true]) ?>
        </div>                
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr03')->label('แผลผ่าตัด')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lr04')->label('การดูแล')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr05')->label('แผล TR')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lr06')->label('การดูแล')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr07')->label('วัด BP (วัน/ครั้ง)')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr08')->label('เต้านม')->radioList([ 'ปกติ' => 'ปกติ', 'สั้น' => 'สั้น', 'บุ๋ม/บอด' => 'บุ๋ม/บอด', 'หัวนมใหญ่' => 'หัวนมใหญ่']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr09')->label('น้ำนม')->radioList([ 'ไหล' => 'ไหล', 'ไม่ไหล' => 'ไม่ไหล']) ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'lr10')->label('ระดับยอดมดลูก')->textInput(['maxlength' => true]) ?>
        </div>
    </div>            
</div>
</div> 
    </fieldset>
</form>
