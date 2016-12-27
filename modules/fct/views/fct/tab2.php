<?php
use yii\helpers\ArrayHelper;

?>

<div class="box box-primary">
                    <div class="box-header"></div>
                    <div class="box-body">

                        <h4><div class="label label-warning"> บันทึกการส่งเยี่ยม / ปัญหาผู้ป่วย</div></h4><p>
                
                <div class="row">
                   <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'tra')->label('Tracheostomy tube')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?> 
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'retng')->label('Retained NG tube')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'ptcate')->label('Retained Foleys cath')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'colobag')->label('Colostomy bag')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'insulin')->label('การฉีดยาอินซูลิน')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'windpipe')->label('การพ่นยาขยายหลอดลม')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'lesion')->label('แผลที่มี')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'lesioncare')->label('การดูแลแผล')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'recov')->label('กายภาพบำบัด (ส่วนที่เป็น)')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'recovcare')->label('การดูแลการทำกายภาพบำบัด')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'oxygen')->label('Home oxygen therapy')->radioList(['มี'=>'แนะนำการดูแล','ไม่มี'=>'ไม่มี']) ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'equip')->label('อุปกรณ์(ระบุ)')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                
               
                <div class="row">        

                    <div class="col-xs-3 col-sm-3 col-md-3">           
                        <?=
                        $form->field($model, 'appdate')->label('วันที่นัด')->widget(\yii\jui\DatePicker::classname(), [
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
                    <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'doctorapp')->label('แพทย์ผู้นัด')->textInput(['maxlength' => true]) ?>
                    </div>             

                    <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'retfo')->label('แหล่งที่มา')->textInput(['maxlength' => true]) ?>
                    </div> 
                    <div class="col-xs-3 col-sm-3 col-md-3">
<?= $form->field($model, 'other')->label('อื่นๆ (โปรดระบุ)')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                
                <div class="row">                    
                    <div class="col-xs-3 col-sm-3 col-md-3">
                         <?=
                                $form->field($model, 'senddate')->label('วันที่ส่งเยี่ยม')->widget(\yii\jui\DatePicker::classname(), [
                                    'language' => 'th',
                                    'dateFormat' => 'yyyy-MM-dd',
                                    'clientOptions' => [
                                        'changeMonth' => true,
                                        'changeYear' => true,
                                    ],
                                    'options' => ['class' => 'form-control',
                                        'required' => ''
                                    ],
                                ]);
                                ?>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?=
                                $form->field($model, 'depart')->label('แผนกที่ส่งเยี่ยม')->widget(\kartik\widgets\Select2::className(), [
                                    'data' => yii\helpers\ArrayHelper::map(\app\modules\fct\models\Fctdepart::find()->all(), 'id', 'name'),
                                    'options' => [
                                        'placeholder' => '<-- แผนกที่ส่งเยี่ยม -->',
                                        'required' => ''
                                    ],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ]
                                ])
                                ?> 
                    </div>                    
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <?= $form->field($model, 'officer')->label('ผู้ส่งเยี่ยม')->textInput(['maxlength' => true]) ?>
                    </div>  
                    <div class="col-xs-3 col-sm-3 col-md-3">                        
                        <?= $form->field($model, 'hosin')->label('รพ.สต')->dropdownList(
                            ArrayHelper::map(\app\modules\fct\models\Fcthosin::find()->all(), 'id', 'name'), [
                        'id' => 'ddl-colour',
                        'prompt' => '<-- รพ.สต -->',
                        'required' => ''
                    ]);?>
                    </div>
                </div>
                
            </div> 
        </div>