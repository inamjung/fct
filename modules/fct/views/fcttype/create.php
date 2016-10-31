<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcttype */

$this->title = 'เพิ่มประเภทผู้ป่วย';
$this->params['breadcrumbs'][] = ['label' => 'Fcttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcttype-create">

     <div class="panel panel-primary">
        <div class="panel-heading"> ประเภทผู้ป่วย</div>
        <div class="panel-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
