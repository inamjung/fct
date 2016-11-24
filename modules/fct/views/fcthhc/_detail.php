<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\modules\fct\models\Fcthhcdetail;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FcthhcdetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<div class="fcthhcdetail-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'formatter'=>['class'=>'yii\i18n\Formatter','nullDisplay'=>'-'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
//            'fcthhc_id',
//            'fct_id',
//            'fctnumber',
            'fctdate',
//            [
//        'label' => 'CID',
//        'attribute' => 'id',
//        'format' => 'raw',
//        'value' => function($model, $key, $widget) {
//            return Html::a(Html::encode($model['id']), [
//                        '/fct/fcthhcdetail/update/',
//                        'id' => $model['id'],
//                       
//                         ]                    
//                    );
//        },
//                'contentOptions' => ['class' => 'text-center'],
//            ],
            // 'home',
            // 'homept',
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
            'other',
            // 'other2',
            // 'datedc',
            // 'notefct',            
            // 'cid',
            // 'status',
            // 'fcthosin_id',
            // 'birthday',
            // 'tmbpart',
            // 'sex',
            // 'bloodgrp',
            // 'fcttype_id',
            // 'fctcolour_id',

           // ['class' => 'yii\grid\ActionColumn'],
                [
         'attribute' => 'บันทึก',
         'format' => 'raw',
         'value' => function($data) {
          $path = ('index.php?r=/fct/fcthhcdetail/update&id=' . $data->id);
          //return Html::a('Add Product', $path, array('target' => '_blank'));
          return Html::a(' <i class="glyphicon glyphicon-edit"> </i>', $path, [ 'data-pjax' => 0, 'class' => 'btn btn-warning btn-sm', 'title' => Yii::t('kvgrid', 'บันทึกการเยี่ยม')]);
          },
                'contentOptions' => ['style' => 'width: 50px;text-align:center']
          ], 
            [
         'attribute' => 'รายละเอียด',
         'format' => 'raw',
         'value' => function($data) {
          $path = ('index.php?r=/fct/fcthhcdetail/view&id=' . $data->id);
          //return Html::a('Add Product', $path, array('target' => '_blank'));
          return Html::a(' <i class="glyphicon glyphicon-search"> </i>', $path, [ 'data-pjax' => 0, 'class' => 'btn btn-info btn-sm', 'title' => Yii::t('kvgrid', 'ดู')]);
          },
                'contentOptions' => ['style' => 'width: 50px;text-align:center']
          ], 
        ],
    ]); ?>
</div>
