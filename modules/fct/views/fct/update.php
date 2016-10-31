<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fct */

$this->title = $model->ptname . ' /  HN :'.$model->hn;
$this->params['breadcrumbs'][] = ['label' => 'Fcts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fct-update">

    <div class="panel panel-primary">
        <div class="panel-heading"> บันทึกข้อมูลการส่งเยี่ยม</div>
        <div class="panel-body">
            <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
