<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>

<div class="box box-success">
    <div class="box-header"> </div>
        <div class="box-body">
            <div class="label label-success"> สรุป</div><hr>
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2">
<?= $form->field($model, 'timeu')->label('ควรเข้าเยี่ยม(ครั้ง)')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'times')->label('ต่อ')->inline()->radioList([ 'วัน' => 'วัน', 'สัปดาห์' => 'สัปดาห์', 'เดือน' => 'เดือน', 'ปี' => 'ปี']) ?>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <?=
                    $form->field($model, 'datenext')->label('เยี่ยมครั้งถัดไป')->widget(\yii\jui\DatePicker::className(), [
                        'language' => 'th',
                        'dateFormat' => 'yyyy-MM-dd',
                        'clientOptions' => [
                            'changeMonth' => true,
                            'changeYear' => true
                        ],
                        'options' => [
                            'class' => 'form-control'
                        ]
                    ])
                    ?>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8">
                     <?= $form->field($model, 'other',['labelOptions'=>['style'=>'color:red']])
                ->label('สรุปการเยี่ยม *')->dropdownList([ 'ปกติ' => 'ปกติ','ทุเลา' => 'ทุเลา','ทรุด' => 'ทรุด','ตาย' => 'ตาย','ไม่สมัครใจให้เยี่ยม' => 'ไม่สมัครใจให้เยี่ยม','readmit' => 'ReAdmit','ไม่พบผู้ป่วย' => 'ไม่พบผู้ป่วย','ย้ายที่อยู่' => 'ย้ายที่อยู่'], ['prompt' => '<-- ระบุผลการเยี่ยม-->','required' => '']) ?>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
<?= $form->field($model, 'other2')->label('ที่อยู่ใหม่ที่ย้ายไป')->textInput(['maxlength' => true]) ?>
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <?= $form->field($model, 'notefct')->label('หมายเหตุ / Note')->textarea(['row' => 4]) ?>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <?=
                    $form->field($model, 'datedc')->label('วันที่จำหน่าย')->widget(\yii\jui\DatePicker::className(), [
                        'language' => 'th',
                        'dateFormat' => 'yyyy-MM-dd',
                        'clientOptions' => [
                            'changeMonth' => true,
                            'changeYear' => TRUE
                        ],
                        'options' => [
                            'class' => 'form-control'
                        ]
                    ])
                    ?>
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4">                    
                    <?= $form->field($model, 'departfct',['labelOptions'=>['style'=>'color:red']])->label('หน่วยงานที่เยี่ยม *')->dropdownList(
                            ArrayHelper::map(\app\modules\fct\models\Fcthosin::find()->all(), 'id', 'name'), [
                                'id' => 'ddl-departfct',
                                'prompt' => '<-- รพ.สต -->',
                                'required' => ''
                    ]);?>
                </div>
            </div>
                <div class="row">
            
                    <?= $form->field($model, 'fcthos')->label('ทีมร่วม')->inline()->checkboxList(ArrayHelper::map(\app\modules\fct\models\Fcthosin::find()
                    ->all(), 'name', 'name'));?>
                </div>
            </div>
            
        </div>
    </div>

    <?php //echo $form->field($model, 'fctname1')->label('ผู้เข้าเยี่ยม')->checkboxList([ 'ทีมFCTอำเภอ' => 'ทีมFCTอำเภอ','ทีมFCTรพ.สต' => 'ทีมFCTรพ.สต','ทีม อสม.' => 'ทีม อสม.','ทีม มอค.' => 'ทีม มอค.','หน่วยงานภายนอก' => 'หน่วยงานภายนอก'])  ?>

    <?php //echo $form->field($model, 'fctname2')->textInput(['maxlength' => true])  ?>

<?php //echo $form->field($model, 'fctname3')->textInput(['maxlength' => true])  ?>

    <?php //echo $form->field($model, 'fctname4')->textInput(['maxlength' => true]) ?>

<?php //echo $form->field($model, 'fctname5')->textInput(['maxlength' => true])  ?>

<?php //echo $form->field($model, 'fctname6')->textInput(['maxlength' => true])  ?>

   <?= $form->field($model, 'status',['labelOptions'=>['style'=>'color:red']])->radioList([ 'เยี่ยมแล้ว' => 'เยี่ยมแล้ว', 'ยังไม่เยี่ยม' => 'ยังไม่เยี่ยม',], ['prompt' => '']) ?>    


    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'บันทึก', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
                       