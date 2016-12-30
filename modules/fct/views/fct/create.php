<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fct */

$this->title = 'เพิ่มผู้ป่วยส่งเยี่ยมบ้าน';
$this->params['breadcrumbs'][] = ['label' => 'Fcts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fct-create">

    <div class="panel panel-primary">
        <div class="panel-heading"> </div>
        <div class="panel-body">
            <?= $this->render('_formnew', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
