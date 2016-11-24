<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FcthhcSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fcthhcs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthhc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fcthhc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fct_id',
            'fctdate',
            'home',
            'homept',
            // 't',
            // 'pr',
            // 'rr',
            // 'bp',
            // 'datenext',
            // 'other',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
