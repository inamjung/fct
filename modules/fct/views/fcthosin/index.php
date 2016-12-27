<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FcthosinsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fcthosins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthosin-index">

    <div class="panel panel-primary">
        <div class="panel-heading">  หน่วย/ทีมที่ออกเยี่ยม</div>
        <div class="panel-body">

    <p>
        <?= Html::a('เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            //'group',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div></div>