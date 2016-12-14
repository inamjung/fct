<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

 <div class="box box-info">
        <div class="box-header"></div>
        <div class="box-body">
            <div class="label label-info"> ประเมินอุปกรณ์</div><hr>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'foley')->label('การดูแล Foleys cath')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'foleynote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                 <?= $form->field($model, 'ng')->label('การดูแล NG tube')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'ngnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'pcn')->label('การดูแล PCN')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'pcnnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'tra')->label('การดูแล Tracheostomy tube')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'tranote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
            </div> 
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'wound')->label('การทำแผล')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'woundnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'insulin')->label('การฉีดยาอินซูลิน')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'insulinnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'windpipe')->label('การพ่นยาขยายหลอดลม')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'windpipenote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'phy')->label('การฟื้นฟูสภาพ/กายภาพบำบัด')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'phynote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'pra')->label('การทำกิจวัตรประจำวัน')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'pranote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'diet')->label('การดูแลด้านโภชนาการ')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'dietnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'env')->label('การดูแลสิ่งแวดล้อม')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'envnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'ser')->label('การเข้าถึงบริการ')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'sernote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3">
                <?= $form->field($model, 'comp')->label('มีภาวะแทรกซ้อน')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'compnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
            	</div>
            </div>
        </div>
    </div>