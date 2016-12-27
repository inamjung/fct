<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fcthosin */

$this->title = 'Create Fcthosin';
$this->params['breadcrumbs'][] = ['label' => 'Fcthosins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcthosin-create">

    <div class="panel panel-primary">
        <div class="panel-heading"> หน่วย/ทีมที่ออกเยี่ยม</div>
        <div class="panel-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
</div>
