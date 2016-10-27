<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthosin */

$this->title = 'Create Fcthosin';
$this->params['breadcrumbs'][] = ['label' => 'Fcthosins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthosin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
