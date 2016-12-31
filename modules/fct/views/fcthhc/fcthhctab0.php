<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\widgets\DetailView;
?>
<p>
<div class="box box-info">
    <div class="box-header"></div>
    <div class="box-body">
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
                                    'value' => $model->hhcfct->ptname,
                                ],
                                [
                                    'label' => 'อายุ/ปี',
                                    'attribute' => 'cid',
                                    'value' => $model->hhcfct->age,
                                ],
                                [
                                    'label' => 'น้ำหนัก/กก.',
                                    'attribute' => 'cid',
                                    'value' => $model->hhcfct->bw,
                                ],
                                [
                                    'label' => 'ส่วนสูง/ซม.',
                                    'attribute' => 'cid',
                                    'value' => $model->hhcfct->height,
                                ],
                                [
                                    'label' => 'ที่อยู่',
                                    'attribute' => 'fcttype_id',
                                    'value' => $model->hhcfct->address,
                                ],
                                [
                                    'label' => 'เบอร์ติดต่อ',
                                    'attribute' => 'fcttype_id',
                                    'value' => $model->hhcfct->phone,
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
            'value' => $model->hhcfct->type->name,
        ],
        [
            'label' => 'ความเร่งด่วน',
            'attribute' => 'fctcolour_id',
            'value' => $model->hhcfct->colourfct->name,
        ],
        [
            'label' => 'โรคประจำตัว',
            'attribute' => 'cid',
            'value' => $model->hhcfct->disease,
        ],
        [
            'label' => 'ประวัติการแพ้ยา',
            'attribute' => 'cid',
            'value' => $model->hhcfct->drugallergy,
        ],
    ],
])
?>
                    </div>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="panel panel-warning">
                    <div class="panel-heading"> ข้อมูลการส่งเยี่ยม</div>
                    <div class="panel-body">
<?=
DetailView::widget([
    'model' => $model,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'attributes' => [
        [
            'label' => 'CC',
            'attribute' => 'cc',
            'value' => $model->hhcfct->cc,
        ],
        [
            'label' => 'PI',
            'attribute' => 'pi',
            'value' => $model->hhcfct->pi,
        ],
//        [
//            'label' => 'การอนุญาต',
//            'attribute' => 'cid',
//            'value' => $model->hhcfct->pass1->name,
//        ],
    ],
])
?>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
