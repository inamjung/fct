<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Fctdepart */

$this->title = 'เพิ่มแผนก';
$this->params['breadcrumbs'][] = ['label' => 'Fctdeparts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fctdepart-create">

    <div class="panel panel-primary">
        <div class="panel-heading"> ข้อมูลเพิ่มเติม</div>
        <div class="panel-body">

            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>

        </div>
    </div>
</div>
