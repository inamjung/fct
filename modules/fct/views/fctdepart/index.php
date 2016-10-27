<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FctdepartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fctdeparts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fctdepart-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fctdepart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'group_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
