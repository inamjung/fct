<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Patient */

$this->title = $model->pname . $model->fname.'  '.$model->lname .' : '.$model->cid;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cid, 'url' => ['view', 'id' => $model->hos_guid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="patient-update">
    <div class="panel panel-primary">
        <div class="panel-heading"> ข้อมูลเพิ่มเติม</div>
        <div class="panel-body">

    <h3><?= Html::encode($this->title) ?></h3>        
    <?= $this->render('_form', [
        'model' => $model,        
    ]) 
        ?>
        </div>
    </div>
</div>

