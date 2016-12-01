<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use app\modules\fct\models\FcthhcdetailSearch;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FcthhcSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ผู้ป่วยที่เยี่ยมแล้ว';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthhc-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <div class="panel panel-default">
        <div class="panel-heading"></div>
        <div class="panel-body">
            <?php  echo $this->render('_search', ['model' => $searchModel]);  ?>
        </div>  
    </div>
    
<!--    <p>
    <?= Html::a('Create Fcthhc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <div class="panel panel-primary">
        <div class="panel-heading"><h4>รายชื่อผู้ป่วยที่ บันทึกผลการเยี่ยมแล้ว</h4></div>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                'hover' => true,
                'striped' => false,
                //'filterModel' => $searchModel1,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',
//            'fct_id',
                    [
                        'class' => 'kartik\grid\ExpandRowColumn',
                        'value' => function($model, $key, $index, $column) {
                            return GridView::ROW_COLLAPSED;
                        },
                        'detail' => function($model, $key, $index, $column) {
                            $searchModel = new FcthhcdetailSearch();
                            $searchModel->fcthhc_id = $model->id;
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                            return Yii::$app->controller->renderPartial('_detail', [
                                        'searchModel' => $searchModel,
                                        'dataProvider' => $dataProvider,
                            ]);
                        }
                            ],
                            'fctdate',
                            [
                                'label' => 'ชื่อ-สกุล',
                                'attribute' => 'cid',
                                'value' => function($model) {
                                    return $model->hhcfct->ptname;
                                }
                            ],
                            [
                                'label' => 'ประเภทผู้ป่วย',
                                'attribute' => 'fcttype_id',
                                'value' => function($model) {
                                    return $model->hhcfct->type->name;
                                }
                            ],
                            [
                                'label' => 'ความเร่งด่วน',
                                'attribute' => 'fctcolour_id',
                                'value' => function($model) {
                                    return $model->hhcfct->colourfct->name;
                                }
                            ],
                                    'status',
                                    [
                                'label' => 'ผลเยี่ยมครั้งนี้',
                                'attribute' => 'other',                                
                            ],
//        'home',
//        'homept',
                            // 't',
                            // 'pr',
                            // 'rr',
                            // 'bp',
                            // 'feel',
                            // 'eat',
                            // 'stool',
                            // 'urin',
                            // 'commu',
                            // 'mental',
                            // 'self',
                            // 'lesion',
                            // 'fall',
                            // 'sore',
                            // 'heart',
                            // 'hearta',
                            // 'heartnote',
                            // 'social',
                            // 'sociala',
                            // 'socialnote',
                            // 'bored',
                            // 'borednote',
                            // 'depress',
                            // 'depressnote',
                            // 'foley',
                            // 'foleynote',
                            // 'ng',
                            // 'ngnote',
                            // 'pcn',
                            // 'pcnnote',
                            // 'tra',
                            // 'tranote',
                            // 'wound',
                            // 'woundnote',
                            // 'insulin',
                            // 'insulinnote',
                            // 'windpipe',
                            // 'windpipenote',
                            // 'phy',
                            // 'phynote',
                            // 'pra',
                            // 'pranote',
                            // 'diet',
                            // 'dietnote',
                            // 'env',
                            // 'envnote',
                            // 'ser',
                            // 'sernote',
                            // 'comp',
                            // 'compnote',
                            // 'timeu',
                            // 'times',
                            // 'datenext',                           
                            // 'other2',
                            // 'datedc',
                            // 'notefct',
                            // 'tr01',
                            // 'tr02',
                            // 'tr03',
                            // 'deg04',
                            // 'deg15',
                            // 'deg14',
                            // 'deg13',
                            // 'deg12',
                            // 'deg11',
                            // 'deg10',
                            // 'deg09',
                            // 'deg08',
                            // 'deg07',
                            // 'deg06',
                            // 'deg05',
                            // 'deg03',
                            // 'deg02',
                            // 'deg01',
                            // 'tr15',
                            // 'tr14',
                            // 'tr13',
                            // 'tr12',
                            // 'tr11',
                            // 'tr10',
                            // 'tr09',
                            // 'tr08',
                            // 'tr07',
                            // 'tr06',
                            // 'tr05',
                            // 'tr04',
                            // 'fctname1',
                            // 'fctname2',
                            // 'fctname3',
                            // 'fctname4',
                            // 'fctname5',
                            // 'fctname6',
                            // 'departfct',
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
                            // 'lrl10',
                            // 'lrl11',
                            // 'lrl09',
                            //'cid',                            
                            // 'fcthosin_id',
                            // 'birthday',
                            // 'tmbpart',
                            // 'sex',
                            // 'bloodgrp',
//                    'fcttype_id',
//                    'fctcolour_id',
                            [
                                'attribute' => 'รายละเอียด',
                                'format' => 'raw',
                                'value' => function($data) {
                                    $path = ('index.php?r=/fct/fcthhc/view&id=' . $data->id);
                                    //return Html::a('Add Product', $path, array('target' => '_blank'));
                                    return Html::a(' <i class="glyphicon glyphicon-search"> </i>', $path, [ 'data-pjax' => 0, 'class' => 'btn btn-info btn-sm', 'title' => Yii::t('kvgrid', 'คลิกดูข้อมูล')]);
                                },
                                        'contentOptions' => ['style' => 'width: 50px;text-align:center']
                                    ],
                                    [
                                        'attribute' => 'ส่งเยี่ยมใหม่',
                                        'format' => 'raw',
                                        'value' => function($data) {
                                            $path = ('index.php?r=/fct/fcthhc/updatedetail&id=' . $data->id);
                                            //return Html::a('Add Product', $path, array('target' => '_blank'));
                                            return Html::a(' <i class="glyphicon glyphicon-edit"> </i>', $path, [ 'data-pjax' => 0, 'class' => 'btn btn-warning btn-sm', 'title' => Yii::t('kvgrid', 'ส่งเยี่ยมใหม่')]);
                                        },
                                                'contentOptions' => ['style' => 'width: 50px;text-align:center']
                                            ],
//                                            [
//                                                'class' => 'yii\grid\ActionColumn',
//                                                'options' => ['style' => 'width:100px;'],
//                                                'template' => '<div class="btn-group btn-group-sm" role="group" aria-label="...">{update}</div>',
//                                                'buttons' => [
//                                                    'view' => function($url, $model, $key) {
//                                                        return Html::a('<i class="glyphicon glyphicon-search"></i>', $url, ['class' => 'btn btn-default']);
//                                                    },
//                                                            'update' => function($url, $model, $key) {
//                                                        return Html::a('<i class="glyphicon glyphicon-pencil"></i> ', ['fcthhc/updatedetail', 'id' => $model->id], [
//                                                                    'class' => 'activity-update-link btn btn-info',
//                                                                    'title' => 'บันทึกเยี่ยม',
//                                                                    'data-toggle' => 'modal',
//                                                                    'data-target' => '#activity-modal',
//                                                                    'data-id' => $key,
//                                                                    'data-pjax' => '0',
//                                                        ]);
//                                                    },
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
//                                                        ]
//                                                    ],
                                                ],
                                            ]);
                                            ?>
        </div>
    </div>
</div>
</div>
</div>
