<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FctSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ผู้ป่วยในระบบ FCT';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fct-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
    <?= Html::a('Create Fct', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <div class="panel panel-success">
        <div class="panel-heading"> รายชื่อผู้ป่วย</div>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                'striped' => false,
                'hover' => true,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',
                    //'fcttype_id',
                    //'pass',
                    //'colour_id',
                    'senddate',
                    'cid',
                    //'hn',
                    // 'an',
                    'ptname',
                    //'birthday',
                    [
                        'attribute' => 'sex',
                        'format' => 'html',
                        'value' => function($model, $key, $index, $column) {
                            return $model->sex == 1 ? "<span style=\"color:green;\">ชาย</span>" : "<span style=\"color:red;\">หญิง</span>";
                        }
                    ],
                    // 'ptage',
                    // 'diage',
                    // 'pps',
                    // 'pain',
                    // 'painnote',
                    // 'cc',
                    // 'pi',
                    // 'bt',
                    // 'pr',
                    // 'rr',
                    // 'bp',
                    // 'drugallergy',
                    // 'admit',
                    // 'dc',
                    // 'or',
                    // 'ordate',
                    // 'disease',
                    // 'receive',
                    'address',
                    // 'ptcate',
                    // 'hossub',
                    // 'tra',
                    // 'retng',
                    // 'retfo',
                    // 'colobag',
                    // 'lesion',
                    // 'lesioncare',
                    // 'recov',
                    // 'recovcare',
                    // 'oxygen',
                    // 'lr01',
                    // 'lr02',
                    // 'lr03',
                    // 'lr04',
                    // 'lr05',
                    // 'lr06',
                    // 'lr07',
                    // 'lr08',
                    // 'lr09',
                    // 'lr10',
                    // 'lrl01',
                    // 'lrl02',
                    // 'lrl03',
                    // 'lrl04',
                    // 'lrl05',
                    // 'lrl06',
                    // 'lrl07',
                    // 'lrl08',
                    // 'lr',
                    // 'lrl09',
                    // 'lrl10',
                    // 'lrl11',
                    // 'lrl12',
                    // 'lrl13',
                    // 'other',
                    // 'appdate',
                    // 'doctorapp',
                    // 'appdate2',
                    // 'doctorapp2',
                    // 'appdate3',
                    // 'doctorapp3',
                    
                    // 'windpipe',
                    // 'insulin',
                    // 'equip',
                    // 'depart',
                    // 'hosin',
                    // 'officer',
                    // 'confirm',
                    // 'confirmfct',
                    //'tmbpart',
                    'phone',
                    //'bloodgrp',                   
//                    [
//                        'class' => 'kartik\grid\BooleanColumn',
//                        'attribute' => 'send',
//                    ],       
//                    [
//                        'class' => 'kartik\grid\BooleanColumn',
//                        'attribute' => 'okcase',
//                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'options' => ['style' => 'width:100px;'],
                        'template' => '<div class="btn-group btn-group-sm" role="group" aria-label="...">{update}</div>',
                        'buttons' => [
//                    'view'=>function($url,$model,$key){
//                        return Html::a('<i class="glyphicon glyphicon-search"></i>',$url,['class'=>'btn btn-default']);
//                    },
                            'update' => function($url, $model, $key) {
                                return Html::a('<i class="glyphicon glyphicon-pencil"></i> ', ['/fct/fcthhc/update', 'fct_id' => $model->id], [
                                            'class' => 'activity-update-link btn btn-info',
                                            'title' => 'บันทึก',
//                                            'data-toggle' => 'modal',
//                                            'data-target' => '#activity-modal',
//                                            'data-id' => $key,
//                                            'data-pjax' => '0',
                                ]);
                            },
//
//                    'delete'=>function($url,$model,$key){
//                         return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url,[
//                                'title' => Yii::t('yii', 'Delete'),
//                                'data-confirm' => Yii::t('yii', 'คุณต้องการลบไฟล์นี้?'),
//                                'data-method' => 'post',
//                                'data-pjax' => '0',
//                                'class'=>'btn btn-default'
//                                ]);
//                    }
                                ]
                            ],
                        ],
                    ]);
                    ?>
        </div>
    </div>
</div>
<?php
                    Modal::begin([
                        'id' => 'activity-modal',
                        'header' => '<h4 class="modal-title"></h4>',
                        'size' => 'modal-lg',
                        'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">ปิด</a>',
                    ]);
                    Modal::end();
                    ?>
                    <?php $this->registerJs('
        function init_click_handlers(){
            $("#activity-create-link").click(function(e) {
                    $.get(
                        "?r=service/create",
                        function (data)
                        {
                            $("#activity-modal").find(".modal-body").html(data);
                            $(".modal-body").html(data);
                            $(".modal-title").html("เพิ่มข้อมูลสมาชิก");
                            $("#activity-modal").modal("show");
                        }
                    );
                });
            $(".activity-view-link").click(function(e) {
                    var fID = $(this).closest("tr").data("key");
                    var $td = $(this).closest("tr").children("td");
                     var sr = $td.eq(1).text();
                    $.get(
                        "?r=pctclinic/pct-clinic-visit/indivhosconfirm",
                        {
                            hn: sr
                        },
                        function (data)
                        {
                            $("#activity-modal").find(".modal-body").html(data);
                            $(".modal-body").html(data);
                            $(".modal-title").html("");
                            $("#activity-modal").modal("show");
                        }
                    );
                });
            $(".activity-update-link").click(function(e) {
                    var fID = $(this).closest("tr").data("key");
                    $.get(
                        "?r=fct/fct/update",
                        {
                           id: fID
                        },
                        function (data)
                        {
                            $("#activity-modal").find(".modal-body").html(data);
                            $(".modal-body").html(data);
                            $(".modal-title").html("รับผู้ป่วยที่มีความเสี่ยงเข้าระบบ");
                            $("#activity-modal").modal("show");
                        }
                    );
                });

        }
        init_click_handlers(); //first run
        $("#fct_id").on("pjax:success", function() {
          init_click_handlers(); //reactivate links in grid after pjax update
        });'); ?>
