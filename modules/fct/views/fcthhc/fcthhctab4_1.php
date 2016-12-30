<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;


?>

<div class="box box-warning">
        <div class="box-header"></div>
        <div class="box-body">
            <div class="label label-warning"> พัฒนาการเด็ก</div><hr>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg01')->label('ใบหูซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr01')->label('ลักษณะ/ขนาด-ใบหูซ้าย')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg02')->label('ใบหูขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr02')->label('ลักษณะ/ขนาด-ใบหูขวา')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg03')->label('ไหล่ซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr03')->label('ลักษณะ/ขนาด-ไหล่ซ้าย')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg04')->label('ไหล่ขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr04')->label('ลักษณะ/ขนาด-ไหล่ขวา')->textInput(['maxlength' => true]) ?>
            	</div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg05')->label('หลังซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr05')->label('ลักษณะ/ขนาด-หลังซ้าย')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg06')->label('หลังขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr06')->label('ลักษณะ/ขนาด-หลังขวา')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg07')->label('สีข้างซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr07')->label('ลักษณะ/ขนาด-สีข้างซ้าย')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg08')->label('สีข้างขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr08')->label('ลักษณะ/ขนาด-สีข้างขวา')->textInput(['maxlength' => true]) ?>
            	</div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg09')->label('สะโพกซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr09')->label('ลักษณะ/ขนาด-สะโพกซ้าย')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg10')->label('สะโพกขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr10')->label('ลักษณะ/ขนาด-สะโพกขวา')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg11')->label('ก้นกบ')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
     <?= $form->field($model, 'tr11')->label('ลักษณะ/ขนาด-ก้นกบ')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg12')->label('ข้อเท้าซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr12')->label('ลักษณะ/ขนาด-ข้อเท้าซ้าย')->textInput(['maxlength' => true]) ?>
            	</div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg13')->label('ข้อเท้าขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
     <?= $form->field($model, 'tr13')->label('ลักษณะ/ขนาด-ข้อเท้าขวา')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg14')->label('ส้นเท้าซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr14')->label('ลักษณะ/ขนาด-ส้นเท้าซ้าย')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'deg15')->label('ส้นเท้าขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr15')->label('ลักษณะ/ขนาด-ส้นเท้าขวา')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                
            	</div>
            </div>            
        </div>
    </div>