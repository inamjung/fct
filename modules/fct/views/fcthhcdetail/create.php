<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthhcdetail */

$this->title = 'Create Fcthhcdetail';
$this->params['breadcrumbs'][] = ['label' => 'Fcthhcdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthhcdetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
