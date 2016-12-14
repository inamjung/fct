<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="box box-success">
    <div class="box-header"></div>
    <div class="box-body">
        <div class="label label-success"> ประเมิน</div><hr>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'feel')->label('ระดับความรู้สึกตัว')->radioList([ 'รู้ตัวดี' => 'รู้ตัวดี', 'สับสน' => 'สบสน', 'ซึมเศร่า' => 'ซึมเศร้า', 'ไม่รู้สึกตัว' => 'ไม่รู้สึกตัว']) ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'eat')->label('การรับประทานอาหาร')->radioList(['กินเอง' => 'กินเอง', 'ผู้ดูแลป้อน' => 'ผู้ดูแลป้อน']) ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'stool')->label('การกลั้นอุจจาระ')->radioList([ 'กลั้นได้' => 'กลั้นได้', 'กลั้นไม่ได้' => 'กลั้นไม่ได้']) ?>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'urin')->label('การกลั้นปัสสาวะ')->radioList([ 'กลั้นได้' => 'กลั้นได้', 'กลั้นไม่ได้' => 'กลั้นไม่ได้']) ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'commu')->label('การติดต่อสื่อสาร')->radioList([ 'สื่อสารได้' => 'สื่อสารได้', 'สื่อสารไม่ได้' => 'สื่อสารไม่ได้']) ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'mental')->label('ภาวะสุขภาพจิต')->radioList([ 'ปกติ' => 'ปกติ', 'ไม่ปกติ' => 'ไม่ปกติ']) ?>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'self')->label('การช่วยเหลือตัวเอง')->radioList([ 'ได้ดี' => 'ได้ดี', 'ปานกลาง' => 'ปานกลาง', 'พึ่งผู้อื่น' => 'พึ่งผู้อื่น', 'ไม่ได้เลย' => 'ไม่ได้เลย']) ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'lesion')->label('ความเสี่ยงต่อแผลกดทับ')->radioList([ 'ไม่เสี่ยง' => 'ไม่เสี่ยง', 'น้อย' => 'น้อย', 'ปานกลาง' => 'ปานกลาง', 'มาก' => 'มาก']) ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'fall')->label('การพลัดตกหกล้ม')->radioList([ 'ไม่เสี่ยง' => 'ไม่เสี่ยง', 'น้อย' => 'น้อย', 'มาก' => 'มาก']) ?>
            </div>

        </div>
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'sore')->label('การยอมรับความเจ็บป่วย')->radioList([ 'ยอมรับ' => 'ยอมรับ', 'วิตกกังวล' => 'วิตกกังวล', 'ทำร้ายตนเอง' => 'ทำร้ายตนเอง', 'ซึมเศร้า' => 'ซึมเศร้า']) ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'heart')->label('ด้านจิตใจ')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'ประเมินไม่ได้' => 'ประเมินไม่ได้', 'มีปัญหา' => 'มีปัญหา']) ?>

                <?= $form->field($model, 'hearta')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'heartnote')->label('การแก้ไขปัญหา')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <?= $form->field($model, 'social')->label('ด้านสังคม')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'ประเมินไม่ได้' => 'ประเมินไม่ได้', 'มีปัญหา' => 'มีปัญหา']) ?>

                <?= $form->field($model, 'sociala')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'socialnote')->label('การแก้ไขปัญหา')->textInput(['maxlength' => true]) ?>
            </div>

        </div>
        
        <hr>
        
        <div class="label label-success"> ประเมินด้านสุขภาพจิต 2Q </div><p>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <?= $form->field($model, 'bored')->label('ในระหว่างสองสัปดาห์ที่ผ่านมา ท่านมีอาการเหล่านี้หรือไม่ เบื่อไม่สนใจอยากทำอะไร')
                        ->radioList([ 'ไม่มี' => 'ไม่มี', 'มี' => 'มี'])
                ?>

                <?= $form->field($model, 'borednote')->label('ประเมิน')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <?= $form->field($model, 'depress')->label('ไม่สบายใจ ซึมเศร้า ท้อแท้')->radioList([ 'ไม่มี' => 'ไม่มี', 'มี' => 'มี']) ?>

                <?= $form->field($model, 'depressnote')->label('ประเมิน')->textInput(['maxlength' => true]) ?>
            </div>
        </div>    
    </div>
</div>