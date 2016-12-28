<?php
$this->title = 'FCT';

use kartik\grid\GridView;
use miloschuman\highcharts\Highcharts;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\widgets\ListView;

$this->params['breadcrumbs'][] = $this->title;
$datas = $dataProvider->getModels();
?>

<?php
$form = ActiveForm::begin(['method' => 'get',
            'action' => Url::to(['patient/indexfct'])]);
?>

<div class='well'>
    <form method="POST">       
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2">            
                <input type="text" name="cid"  class="form-control" placeholder="...ระบุเลขประชาชน..">
            </div> 
            <div class="col-xs-2 col-sm-2 col-md-2">
                <button class='btn btn-danger'>ประมวลผล</button>
            </div>
        </div>

    </form>
</div>

<?php ActiveForm::end(); ?>
<?php
if (count($datas) == 0) {
    echo "<div class='alert alert-info'>ยังไม่มีผลลัพธ์จากการค้นหาข้อมูล</div>";
    return;
}
?>

<div class="panel panel-success">
    <div class="panel-heading"> ผลจากการค้นหา</div>
    <div class="panel-body">
        <?php Pjax::begin(['id' => 'patientfct_pjax_id']); ?>
        <?php
        $gridColumns = [
            //['class' => 'kartik\grid\SerialColumn'],

            [
                'label' => 'วันที่รับบริการ',
                'attribute' => 'vstdate',
                'contentOptions' => ['class' => 'text-left'],
            ],
            [
                'label' => 'CID',
                'attribute' => 'cid',
                'format' => 'raw',
                'value' => function($model, $key, $widget)use($cid, $hos_guid) {
                    return Html::a(Html::encode($model['cid']), [
                                'patient/fctinsert/',
                                'id' => $model['hos_guid'],
                        'age_y'=>$model['age_y'],
                        'cc'=>$model['cc'],
                        'pi'=>$model['hpi'],
                        'bw'=>$model['bw'],
                        'height'=>$model['height'],
                        
                        'cid'=>$model['cid'],
                        'ptname'=>$model['ptname'],
                        'disease'=>$model['clinic'],
                        'vstdate'=>$model['vstdate'],
                        'moopart'=>$model['moopart'],
                        
                        'drugallergy'=>$model['drugallergy'],
                        'phone'=>$model['informtel'],
                        'tmbpart'=>$model['tmbpart'],
                        'address'=>$model['informaddr'],
                        'pttype'=>$model['pttype'],
                        'sex'=>$model['sex'],
                        'hn'=>$model['hn'],
                        'diage'=>$model['pdx'],
                        'bloodgrp'=>$model['bloodgrp'],
                        
                                    ], [
                                'data-toggle' => "modal",
                                'data-target' => "#patientfct",
                                    ]
                    );
                },
                        'contentOptions' => ['class' => 'text-center'],
                    ],
                    [
                        'label' => 'ชื่อ-สุุล',
                        'attribute' => 'ptname',
                        'contentOptions' => ['class' => 'text-left'],
                    ],
                    [
                        'label' => 'อายุ',
                        'attribute' => 'age_y',
                        'contentOptions' => ['class' => 'text-left'],
                    ],
                    [
                        'label' => 'โรคประจำตัว',
                        'attribute' => 'clinic',
                        'contentOptions' => ['class' => 'text-left'],
                    ],
                    [
                        'label' => 'CC',
                        'attribute' => 'cc',
                        'contentOptions' => ['class' => 'text-left'],
                    ],
                    [
                        'label' => 'PI',
                        'attribute' => 'hpi',
                        'contentOptions' => ['class' => 'text-left'],
                    ], 
                    [
                        'label' => 'วินิฉัย',
                        'attribute' => 'pdx',
                        'contentOptions' => ['class' => 'text-left'],
                    ],    
                    [
                        'label' => 'น้ำหนัก',
                        'attribute' => 'bw',
                        'contentOptions' => ['class' => 'text-left'],
                    ],
                    [
                        'label' => 'ส่วนสูง',
                        'attribute' => 'height',
                        'contentOptions' => ['class' => 'text-left'],
                    ],    
                    [
                        'label' => 'ประวัติแพ้ยา',
                        'attribute' => 'drugallergy',
                        'contentOptions' => ['class' => 'text-left'],
                    ],
//    [
//                        'attribute' => 'ส่งต่อ',
//                        'format' => 'raw',
//                        'value' => function($data, $key) {
//                            //$path = ('index.php?r=/receivedata/updatestock&id=' . $data->id);                           
//                            return Html::a(' <i class="glyphicon glyphicon-edit"> </i>', '#', ['target' => '_blank',
//                                        'class' => 'activity-updatefct-link btn btn-warning btn-sm',
//                                        'data-toggle' => 'modal',
//                                        'data-target' => '#activity-modal',
//                                        'data-id' => $key,
//                                        'data-pjax' => 0,
//                                        'title' => Yii::t('kvgrid', 'ส่งต่อ')]);
//                        },
//                                'contentOptions' => ['style' => 'width: 50px;text-align:center']
//                            ],
                ];
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                    'columns' => $gridColumns,
                    'responsive' => true,
                    'hover' => true,
                    'striped' => false,
                    'floatHeader' => FALSE,
                    'toolbar' => [
                        '{export}' => false,
                        '{toggleData}' => false
                    ],
                    'panel' => [],
                ]);
                ?>
                <?php Pjax::end() ?>
            </div>
        </div>

        <div class="footerrow" style="padding-top: 60px">

        </div>
        <!--///-->
        <?php
        Modal::begin([
            'id' => 'patientfct',
            'header' => '<h4 class="modal-title"></h4>',
            'size' => 'modal-lg',
            'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">ปิด</a>',
        ]);
        Modal::end();
        ?>

        <?php
        $this->registerJs("
    $('#patientfct').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var modal = $(this)
        var title = button.data('title') 
        var href = button.attr('href') 
        modal.find('.modal-title').html(title)
        modal.find('.modal-body').html('<i class=\"fa fa-spinner fa-spin\"></i>')
        $.post(href)
            .done(function( data ) {
                modal.find('.modal-body').html(data)
            });
        })
");
        ?>  
