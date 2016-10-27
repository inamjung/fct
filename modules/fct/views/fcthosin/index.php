<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\fct\models\FcthosinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fcthosins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthosin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fcthosin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'group',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
