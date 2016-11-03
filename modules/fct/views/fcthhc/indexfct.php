<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FcthhcSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fcthhcs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthhc-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
<?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

<!--    <p>
<?= Html::a('Create Fcthhc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <div class="panel panel-warning">
        <div class="panel-heading"></div>
        <div class="panel-body">
<?=
GridView::widget([
    'dataProvider' => $dataProvider1,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'hover'=>true,
    'striped'=>false,
    //'filterModel' => $searchModel1,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        //'id',
//            'fct_id',
        'fctdate',
        'home',
        'homept',
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
        // 'other',
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
        'status',
        // 'fcthosin_id',
        // 'birthday',
        // 'tmbpart',
        // 'sex',
        // 'bloodgrp',
        'fcttype_id',
        'fctcolour_id',
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);
?>
            </div>
        </div>
    </div>
            
            
            
        <div class="panel panel-primary">
        <div class="panel-heading"></div>
        <div class="panel-body">
            
            
            <?php
        echo GridView::widget([
        'dataProvider' => $dataProvider2,
        'hover'=>true,
        'striped'=>false,
        //'filterModel' => $searchModel2,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
                         'cid',
        'status',
        ], 
        ]); 
      ?>
  </div>
        </div>
    </div>

</div>
