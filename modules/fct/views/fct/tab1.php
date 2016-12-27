<?php
use yii\helpers\ArrayHelper;

?>

<div class="box box-primary">
        <div class="box-header"></div>
        <div class="box-body">
            <h4><div class="label label-success">บันทึกข้อมูลที่ต้องการให้เยี่ยม</div></h4><p>
            <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading"> </div>
                    <div class="panel-body">

                         <?= $form->field($model, 'fcttype_id')->label('ประเภทผู้ป่วย')->dropdownList(
                            ArrayHelper::map(app\modules\fct\models\Fcttype::find()->all(), 'id', 'name'), [
                        'id' => 'ddl-colour',
                        'prompt' => '--- เลือกประเภท ---',
                        'required' => ''
                    ]);?>
                        
                        <?= $form->field($model, 'colour_id')->label('ความเร่งด่วน')->dropdownList(
                            ArrayHelper::map(app\modules\fct\models\Fctcolour::find()->all(), 'id', 'name'), [
                        'id' => 'ddl-colour',
                        'prompt' => '--- เลือกข้อมูล ---',
                        'required' => ''
                    ]);?>
                    </div>
                </div>
            </div>    
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading"> </div>
                    <div class="panel-body">
                        <?= $form->field($model, 'pps')->label('PPS Scale(%)')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'bt')->label('BT(C)')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'pr')->label('PR(min)')->textInput(['maxlength' => true]) ?>
                        
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading"> </div>
                    <div class="panel-body"> 
                        <?= $form->field($model, 'rr')->label('RR(min)')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'bp')->label('BP(mmHg)')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'pain')->label('Pain Scale')->textInput(['maxlength' => true]) ?>                       

                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading"> </div>
                    <div class="panel-body">
                        <?= $form->field($model, 'painnote')->label('การจัดการกับความปวด')->textInput(['maxlength' => true]) ?>
                        <?= $form->field($model, 'or')->label('การผ่าตัด')->textInput(['maxlength' => true]) ?>
                        <?=
                        $form->field($model, 'ordate')->label('วันที่ผ่าตัด')->widget(\yii\jui\DatePicker::classname(), [
                            'language' => 'th',
                            'dateFormat' => 'yyyy-MM-dd',
                            'clientOptions' => [
                                'changeMonth' => true,
                                'changeYear' => true,
                            ],
                            'options' => ['class' => 'form-control'
                            ],
                        ]);
                        ?>
     
                    </div>
                </div>
            </div>    
        </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <?= $form->field($model, 'receive')->label('ยาที่ได้รับล่าสุด')->textarea(['row' => 6]) ?> 
                </div>
            </div>
            
        </div>            
        </div>