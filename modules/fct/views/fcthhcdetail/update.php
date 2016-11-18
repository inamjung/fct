<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhcdetail */

$this->title = 'Update Fcthhcdetail: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fcthhcdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fcthhcdetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
