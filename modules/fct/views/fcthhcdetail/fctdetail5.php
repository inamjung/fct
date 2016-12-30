<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<div class="box box-success">
        <div class="box-header"></div>
        <div class="box-body">
 <div class="label label-success"> สรุป</div>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2">
                <?= $form->field($model, 'timeu')->label('ควรเข้าเยี่ยม(ครั้ง)')->textInput(['maxlength' => true]) ?>
            	</div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                     <?= $form->field($model, 'times')->label('ต่อ')->radioList([ 'วัน' => 'วัน','สัปดาห์' => 'สัปดาห์','เดือน' => 'เดือน','ปี' => 'ปี']) ?>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <?= $form->field($model, 'datenext')->label('เยี่ยมครั้งถัดไป')->widget(\yii\jui\DatePicker::className(),[
        'language'=>'th',
        'dateFormat'=>'yyyy-MM-dd',
        'clientOptions'=>[
            'changeMonth'=>true,
            'changeYear'=>true
        ],
        'options'=>[
            'class'=>'form-control'
        ]
    ]) ?>
                </div>
               
        </div>
        <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                <?= $form->field($model, 'other',['labelOptions'=>['style'=>'color:red']])
                ->label('สรุปการเยี่ยม')->dropdownList([ 'ปกติ' => 'ปกติ','ทุเลา' => 'ทุเลา','ทรุด' => 'ทรุด','ตาย' => 'ตาย','ไม่สมัครใจให้เยี่ยม' => 'ไม่สมัครใจให้เยี่ยม','readmit' => 'ReAdmit','ไม่พบผู้ป่วย' => 'ไม่พบผู้ป่วย','ย้ายที่อยู่' => 'ย้ายที่อยู่'], ['prompt' => '<-- ระบุผลการเยี่ยม-->','required' => '']) ?>
                </div>
             <div class="col-xs-6 col-sm-6 col-md-6">
                <?= $form->field($model, 'other2')->label('ที่อยู่ใหม่ที่ย้ายไป')->textInput(['maxlength' => true]) ?>
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                <?= $form->field($model, 'notefct')->label('หมายเหตุ / Note')->textarea(['row' => 4]) ?>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
                <?= $form->field($model, 'datedc')->label('วันที่จำหน่าย')->widget(\yii\jui\DatePicker::className(),[
                    'language'=>'th',
                    'dateFormat'=>'yyyy-MM-dd',
                    'clientOptions'=>[
                        'changeMonth'=>true,
                        'changeYear'=>TRUE
                    ],
                    'options'=>[
                        'class'=>'form-control'
                    ]
                ]) ?>
                </div>
             
                <div class="col-xs-4 col-sm-4 col-md-4">

                    <?= $form->field($model, 'departfct',['labelOptions'=>['style'=>'color:red']])->label('หน่วยงานที่เยี่ยม *')->dropdownList(
                            ArrayHelper::map(\app\modules\fct\models\Fcthosin::find()->all(), 'id', 'name'), [
                        'id' => 'ddl-colour',
                        'prompt' => '<-- ระบุหน่วยงานที่เยี่ยม-->',
                        'required' => ''
                    ]);?>
                </div>
            </div>
        </div>
    </div>

<?= $form->field($model, 'status')->label('สถานะ')->radioList([ 'เยี่ยมแล้ว' => 'เยี่ยมแล้ว', 'ยังไม่เยี่ยม' => 'ยังไม่เยี่ยม', ], ['prompt' => '']) ?>    


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>