<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthosin */

$this->title = 'แก้ไข : ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Fcthosins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fcthosin-update">

    <div class="panel panel-primary">
        <div class="panel-heading"> แก้ไข หน่วย/ทีมที่ออกเยี่ยม</div>
        <div class="panel-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
</div>
