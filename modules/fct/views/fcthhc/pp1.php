<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="box box-info">
                    <div class="box-header"></div>
                    <div class="box-body">
                        <div class="label label-info"> ประเมินเด็การก</div><hr>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'lrl01')->label('ทารก/เด็ก ลักษณะาทรก')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'lrl02')->label('BW(kg)')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'lrl03')->label('ตัวยาว(cm)')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'lrl04')->label('รอบศรีษะ(cm)')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'lrl05')->label('TMP')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'lrl06')->label('เต้าสะดือนม')->radioList([ 'ปกติ' => 'ปกติ', 'แห้ง' => 'แห้ง', 'แฉะ' => 'แฉะ', 'ติดเชื้อ' => 'ติดเชื้อ']) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'lrl07')->label('ตา')->radioList([ 'ปกติ' => 'ปกติ', 'แฉะ' => 'แฉะ']) ?>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <?= $form->field($model, 'lrl08')->label('การขับถ่าย')->radioList([ 'ปกติ' => 'ปกติ', 'ไม่ปกติ' => 'ไม่ปกติ']) ?>
<?= $form->field($model, 'lrl09')->label('การขับถ่าย(ไม่ปกติระบุ)')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <?= $form->field($model, 'lrl10')->label('ปัสสาวะ')->radioList([ 'ปกติ' => 'ปกติ', 'ไม่ปกติ' => 'ไม่ปกติ']) ?>
<?= $form->field($model, 'lrl11')->label('ปัสสาวะ(ไม่ปกติระบุ)')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div> 
                    </div>
                </div>