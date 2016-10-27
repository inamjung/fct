<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcttype */

$this->title = 'Create Fcttype';
$this->params['breadcrumbs'][] = ['label' => 'Fcttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcttype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
