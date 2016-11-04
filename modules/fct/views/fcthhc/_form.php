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
    
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading"> ข้อมูลการส่งเยี่ยม</div>
                <div class="panel-body">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                        'attributes' => [
                            [
                                'label' => 'CID',
                                'attribute' => 'cid'
                            ],
                            [
                                'label' => 'ชื่อ-สกุล',
                                'attribute' => 'cid',
                                'value'=> $model->hhcfct->ptname,
                            ],
                            [
                                'label' => 'ที่อยู่',
                                'attribute' => 'fcttype_id',
                                'value'=> $model->hhcfct->address,
                            ],
                            
                            
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>
        
        
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading"> ข้อมูลการส่งเยี่ยม</div>
                <div class="panel-body">
                    <?=
                    DetailView::widget([
                        'model' => $model,
                        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],                        
                        'attributes' => [                            
                            [
                                'label' => 'ประเภท',
                                'attribute' => 'fcttype_id',
                                'value'=> $model->hhcfct->type->name,
                            ],
                            [
                                'label' => 'ความเร่งด่วน',
                                'attribute' => 'fctcolour_id',
                                'value'=> $model->hhcfct->colour->name,
                            ],
                            [
                                'label' => 'การอนุญาต',
                                'attribute' => 'cid',
                                'value'=> $model->hhcfct->pass1->name,
                            ],
                            
                        ],
                    ])
                    ?>
                </div>
            </div>
        </div>
        
    </div>
    

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?= $form->field($model, 'fctdate')->label('วันที่เข้าเยี่ยม')->widget(\yii\jui\DatePicker::className(),[
        'language'=>'th',
        'dateFormat'=>'yyyy-mm-dd',
        'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options' => ['class' => 'form-control',
                //'disabled' => true
            ],
    ]) ?>
        </div>
    </div>
    <div class="row">    
        <div class="col-xs-3 col-sm-3 col-md-3">
            
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            
        </div>
    </div>
   

    <?= $form->field($model, 'home')->label('จำนวนสมาชิกในบ้าน/คน')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'homept')->label('ผู้ดูแล')->textInput() ?>

    <?= $form->field($model, 't')->label('T')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pr')->label('PR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->label('RR(ครั้ง/นาที)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bp')->label('BP(mmHg)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'feel')->label('ระดับความรู้สึกตัว')->radioList([ 'รู้ตัวดี' => 'รู้ตัวดี', 'สับสน' => 'สบสน','ซึมเศร่า' => 'ซึมเศร้า', 'ไม่รู้สึกตัว' => 'ไม่รู้สึกตัว' ]) ?>

    <?= $form->field($model, 'eat')->label('การรับประทานอาหาร')->radioList(['กินเอง' => 'กินเอง', 'ผู้ดูแลป้อน' => 'ผู้ดูแลป้อน']) ?>

    <?= $form->field($model, 'stool')->label('การกลั้นอุจจาระ')->radioList([ 'กลั้นได้' => 'กลั้นได้', 'กลั้นไม่ได้' => 'กลั้นไม่ได้']) ?>

    <?= $form->field($model, 'urin')->label('การกลั้นปัสสาวะ')->radioList([ 'กลั้นได้' => 'กลั้นได้', 'กลั้นไม่ได้' => 'กลั้นไม่ได้']) ?>

    <?= $form->field($model, 'commu')->label('การติดต่อสื่อสาร')->radioList([ 'สื่อสารได้' => 'สื่อสารได้', 'สื่อสารไม่ได้' => 'สื่อสารไม่ได้']) ?>

    <?= $form->field($model, 'mental')->label('ภาวะสุขภาพจิต')->radioList([ 'ปกติ' => 'ปกติ', 'ไม่ปกติ' => 'ไม่ปกติ']) ?>

    <?= $form->field($model, 'self')->label('การช่วยเหลือตัวเอง')->radioList([ 'ได้ดี' => 'ได้ดี', 'ปานกลาง' => 'ปานกลาง','พึ่งผู้อื่น' => 'พึ่งผู้อื่น', 'ไม่ได้เลย' => 'ไม่ได้เลย']) ?>

    <?= $form->field($model, 'lesion')->label('ความเสี่ยงต่อแผลกดทับ')->radioList([ 'ไม่เสี่ยง' => 'ไม่เสี่ยง', 'น้อย' => 'น้อย','ปานกลาง' => 'ปานกลาง', 'มาก' => 'มาก']) ?>

    <?= $form->field($model, 'fall')->label('การพลัดตกหกล้ม')->radioList([ 'ไม่เสี่ยง' => 'ไม่เสี่ยง', 'น้อย' => 'น้อย', 'มาก' => 'มาก']) ?>

    <?= $form->field($model, 'sore')->label('การยอมรับความเจ็บป่วย')->radioList([ 'ยอมรับ' => 'ยอมรับ', 'วิตกกังวล' => 'วิตกกังวล','ทำร้ายตนเอง' => 'ทำร้ายตนเอง', 'ซึมเศร้า' => 'ซึมเศร้า']) ?>

    <?= $form->field($model, 'heart')->label('ด้านจิตใจ')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'ประเมินไม่ได้' => 'ประเมินไม่ได้','มีปัญหา'=>'มีปัญหา']) ?>

    <?= $form->field($model, 'hearta')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'heartnote')->label('การแก้ไขปัญหา')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social')->label('ด้านสังคม')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'ประเมินไม่ได้' => 'ประเมินไม่ได้','มีปัญหา'=>'มีปัญหา']) ?>

    <?= $form->field($model, 'sociala')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'socialnote')->label('การแก้ไขปัญหา')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bored')->label('ประเมินด้านสุขภาพจิต 2Q ในระหว่างสองสัปดาห์ที่ผ่านมา ท่านมีอาการเหล่านี้หรือไม่ เบื่อไม่สนใจอยากทำอะไร')
            ->radioList([ 'ไม่มี' => 'ไม่มี', 'มี' => 'มี']) ?>

    <?= $form->field($model, 'borednote')->label('ประเมิน')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depress')->label('ไม่สบายใจ ซึมเศร้า ท้อแท้')->radioList([ 'ไม่มี' => 'ไม่มี', 'มี' => 'มี']) ?>

    <?= $form->field($model, 'depressnote')->label('ประเมิน')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foley')->label('การดูแล Foleys cath')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'foleynote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ng')->label('การดูแล NG tube')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'ngnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pcn')->label('การดูแล PCN')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'pcnnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tra')->label('การดูแล Tracheostomy tube')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'tranote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wound')->label('การทำแผล')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'woundnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insulin')->label('การฉีดยาอินซูลิน')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'insulinnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'windpipe')->label('การพ่นยาขยายหลอดลม')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'windpipenote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phy')->label('การฟื้นฟูสภาพ/กายภาพบำบัด')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'phynote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pra')->label('การทำกิจวัตรประจำวัน')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'pranote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diet')->label('การดูแลด้านโภชนาการ')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'dietnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'env')->label('การดูแลสิ่งแวดล้อม')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'envnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ser')->label('การเข้าถึงบริการ')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'sernote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comp')->label('มีภาวะแทรกซ้อน')->radioList([ 'ไม่มีปัญหา' => 'ไม่มีปัญหา', 'มีปัญหา' => 'มีปัญหา']) ?>

    <?= $form->field($model, 'compnote')->label('มีปัญหา(ระบุ)')->textInput(['maxlength' => true]) ?>
    
    
    
    <?= $form->field($model, 'deg01')->label('ใบหูซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr01')->label('ลักษณะ/ขนาด-ใบหูซ้าย')->textInput(['maxlength' => true]) ?>
    

    <?= $form->field($model, 'deg02')->label('ใบหูขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr02')->label('ลักษณะ/ขนาด-ใบหูขวา')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg03')->label('ไหล่ซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr03')->label('ลักษณะ/ขนาด-ไหล่ซ้าย')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg04')->label('ไหล่ขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr04')->label('ลักษณะ/ขนาด-ไหล่ขวา')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg05')->label('หลังซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr05')->label('ลักษณะ/ขนาด-หลังซ้าย')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg06')->label('หลังขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr06')->label('ลักษณะ/ขนาด-หลังขวา')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg07')->label('สีข้างซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr07')->label('ลักษณะ/ขนาด-สีข้างซ้าย')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg08')->label('สีข้างขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr08')->label('ลักษณะ/ขนาด-สีข้างขวา')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg09')->label('สะโพกซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr09')->label('ลักษณะ/ขนาด-สะโพกซ้าย')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg10')->label('สะโพกขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr10')->label('ลักษณะ/ขนาด-สะโพกขวา')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg11')->label('ก้นกบ')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
     <?= $form->field($model, 'tr11')->label('ลักษณะ/ขนาด-ก้นกบ')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg12')->label('ข้อเท้าซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr12')->label('ลักษณะ/ขนาด-ข้อเท้าซ้าย')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg13')->label('ข้อเท้าขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
     <?= $form->field($model, 'tr13')->label('ลักษณะ/ขนาด-ข้อเท้าขวา')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg14')->label('ส้นเท้าซ้าย')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr14')->label('ลักษณะ/ขนาด-ส้นเท้าซ้าย')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deg15')->label('ส้นเท้าขวา')->radioList([ '1' => '1', '2' => '2','3' => '3', '4' => '4']) ?>
    <?= $form->field($model, 'tr15')->label('ลักษณะ/ขนาด-ส้นเท้าขวา')->textInput(['maxlength' => true]) ?>
    
    
      <?= $form->field($model, 'lr')->textInput(['maxlength' => true]) ?>
    
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'lr01')->label('แผลฝีเย็บ')->textInput(['maxlength' => true]) ?>
            
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <?= $form->field($model, 'lr02')->label('การดูแล')->textInput(['maxlength' => true]) ?>
        </div>
    </div>


    <?= $form->field($model, 'lr03')->label('แผลผ่าตัด')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr04')->label('การดูแล')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr05')->label('แผล TR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr06')->label('การดูแล')->textInput(['maxlength' => true]) ?>
    

    <?= $form->field($model, 'lr07')->label('วัด BP (วัน/ครั้ง)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr08')->label('เต้านม')->radioList([ 'ปกติ' => 'ปกติ', 'สั้น' => 'สั้น','บุ๋ม/บอด' => 'บุ๋ม/บอด', 'หัวนมใหญ่' => 'หัวนมใหญ่']) ?>

    <?= $form->field($model, 'lr09')->label('น้ำนม')->radioList([ 'ไหล' => 'ไหล', 'ไม่ไหล' => 'ไม่ไหล']) ?>

    <?= $form->field($model, 'lr10')->label('ระดับยอดมดลูก')->textInput(['maxlength' => true]) ?>
    
    

    <?= $form->field($model, 'lrl01')->label('ทารก/เด็ก ลักษณะาทรก')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl02')->label('BW(kg)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl03')->label('ตัวยาว(cm)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl04')->label('รอบศรีษะ(cm)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl05')->label('TMP')->textInput(['maxlength' => true]) ?>
    
    

    <?= $form->field($model, 'lrl06')->label('เต้าสะดือนม')->radioList([ 'ปกติ' => 'ปกติ', 'แห้ง' => 'แห้ง','แฉะ' => 'แฉะ','ติดเชื้อ' => 'ติดเชื้อ']) ?>

    <?= $form->field($model, 'lrl07')->label('ตา')->radioList([ 'ปกติ' => 'ปกติ','แฉะ' => 'แฉะ']) ?>

    <?= $form->field($model, 'lrl08')->label('การขับถ่าย')->radioList([ 'ปกติ' => 'ปกติ','ไม่ปกติ' => 'ไม่ปกติ']) ?>
    <?= $form->field($model, 'lrl09')->label('การขับถ่าย(ไม่ปกติระบุ)')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'lrl10')->label('ปัสสาวะ')->radioList([ 'ปกติ' => 'ปกติ','ไม่ปกติ' => 'ไม่ปกติ']) ?>
    <?= $form->field($model, 'lrl11')->label('ปัสสาวะ(ไม่ปกติระบุ)')->textInput(['maxlength' => true]) ?>
    
  
    
    
    <?= $form->field($model, 'timeu')->label('ควรเข้าเยี่ยม(ครั้ง)')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'times')->label('ต่อ')->radioList([ 'วัน' => 'วัน','สัปดาห์' => 'สัปดาห์','เดือน' => 'เดือน','ปี' => 'ปี']) ?>

    <?= $form->field($model, 'datenext')->label('เยี่ยมครั้งถัดไป')->widget(\yii\jui\DatePicker::className(),[
        'language'=>'th',
        'dateFormat'=>'yyyy-mm-dd',
        'clientOptions'=>[
            'changeMonth'=>true,
            'changeYear'=>true
        ],
        'options'=>[
            'class'=>'form-control'
        ]
    ]) ?>

    <?= $form->field($model, 'other')->label('สรุปการเยี่ยม')->radioList([ 'ปกติ' => 'ปกติ','ทุเลา' => 'ทุเลา','ทรุด' => 'ทรุด','ตาย' => 'ตาย','ไม่สมัครใจให้เยี่ยม' => 'ไม่สมัครใจให้เยี่ยม','readmit' => 'ReAdmit','ไม่พบผู้ป่วย' => 'ไม่พบผู้ป่วย','ย้ายที่อยู่' => 'ย้ายที่อยู่']) ?>

    <?= $form->field($model, 'other2')->label('ที่อยู่ใหม่ที่ย้ายไป')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datedc')->label('วันที่จำหน่าย')->widget(\yii\jui\DatePicker::className(),[
        'language'=>'th',
        'dateFormat'=>'yyyy-mm-dd',
        'clientOptions'=>[
            'changeMonth'=>true,
            'changeYear'=>TRUE
        ],
        'options'=>[
            'class'=>'form-control'
        ]
    ]) ?>

    <?= $form->field($model, 'notefct')->label('หมายเหตุ / Note')->textInput(['maxlength' => true]) ?>

    
    <?php //echo $form->field($model, 'fctname1')->label('ผู้เข้าเยี่ยม')->checkboxList([ 'ทีมFCTอำเภอ' => 'ทีมFCTอำเภอ','ทีมFCTรพ.สต' => 'ทีมFCTรพ.สต','ทีม อสม.' => 'ทีม อสม.','ทีม มอค.' => 'ทีม มอค.','หน่วยงานภายนอก' => 'หน่วยงานภายนอก']) ?>

    <?php //echo $form->field($model, 'fctname2')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'fctname3')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'fctname4')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'fctname5')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'fctname6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departfct')->label('หน่วยงานที่เยี่ยม')->widget(\kartik\widgets\Select2::className(),[
        'data'=> yii\helpers\ArrayHelper::map(app\modules\fct\models\Pcuchild::find()->all(), 'hcode', 'name'),
        'options'=>[
            'placeholder'=>'<-- ระบุหน่วยงานที่เยี่ยม -->'
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ]) ?>
    <?= $form->field($model, 'status')->radioList([ 'เยี่ยมแล้ว' => 'เยี่ยมแล้ว', 'ยังไม่เยี่ยม' => 'ยังไม่เยี่ยม', ], ['prompt' => '']) ?>    



    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
