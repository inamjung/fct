<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\PttypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pttype-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pttype') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'editmask') ?>

    <?= $form->field($model, 'isuse') ?>

    <?= $form->field($model, 'pcode') ?>

    <?php // echo $form->field($model, 'requirecode') ?>

    <?php // echo $form->field($model, 'doctor_fee') ?>

    <?php // echo $form->field($model, 'fee_code') ?>

    <?php // echo $form->field($model, 'discount') ?>

    <?php // echo $form->field($model, 'contract') ?>

    <?php // echo $form->field($model, 'paidst') ?>

    <?php // echo $form->field($model, 'in_region') ?>

    <?php // echo $form->field($model, 'uc') ?>

    <?php // echo $form->field($model, 'require_hcode') ?>

    <?php // echo $form->field($model, 'oldcode') ?>

    <?php // echo $form->field($model, 'fee_code2') ?>

    <?php // echo $form->field($model, 'price_type') ?>

    <?php // echo $form->field($model, 'debtor') ?>

    <?php // echo $form->field($model, 'noexpire') ?>

    <?php // echo $form->field($model, 'hipdata_code') ?>

    <?php // echo $form->field($model, 'min_age') ?>

    <?php // echo $form->field($model, 'max_age') ?>

    <?php // echo $form->field($model, 'bill_sss') ?>

    <?php // echo $form->field($model, 'bill_type') ?>

    <?php // echo $form->field($model, 'hipdata_pttype') ?>

    <?php // echo $form->field($model, 'use_contract_id') ?>

    <?php // echo $form->field($model, 'yearly_charge') ?>

    <?php // echo $form->field($model, 'yearly_charge_icode1') ?>

    <?php // echo $form->field($model, 'yearly_charge_icode2') ?>

    <?php // echo $form->field($model, 'region_type') ?>

    <?php // echo $form->field($model, 'pttype_group1') ?>

    <?php // echo $form->field($model, 'pttype_group2') ?>

    <?php // echo $form->field($model, 'pttype_guid') ?>

    <?php // echo $form->field($model, 'max_debt_money') ?>

    <?php // echo $form->field($model, 'allow_finance_edit') ?>

    <?php // echo $form->field($model, 'print_csmb_statement') ?>

    <?php // echo $form->field($model, 'pttype_information') ?>

    <?php // echo $form->field($model, 'fee_code_paidst') ?>

    <?php // echo $form->field($model, 'fee_code2_paidst') ?>

    <?php // echo $form->field($model, 'debt_due_day') ?>

    <?php // echo $form->field($model, 'rx_pay_debit_tr') ?>

    <?php // echo $form->field($model, 'separate_rcpno') ?>

    <?php // echo $form->field($model, 'rcp_bookno') ?>

    <?php // echo $form->field($model, 'separate_debt_id') ?>

    <?php // echo $form->field($model, 'admit_fee_code') ?>

    <?php // echo $form->field($model, 'use_package') ?>

    <?php // echo $form->field($model, 'charge_df_perday') ?>

    <?php // echo $form->field($model, 'nhso_code') ?>

    <?php // echo $form->field($model, 'ipd_hour_cut') ?>

    <?php // echo $form->field($model, 'pttype_spp_id') ?>

    <?php // echo $form->field($model, 'print_presc_ned') ?>

    <?php // echo $form->field($model, 'hos_guid') ?>

    <?php // echo $form->field($model, 'sks_benefit_plan_type_id') ?>

    <?php // echo $form->field($model, 'pttype_std_code') ?>

    <?php // echo $form->field($model, 'export_eclaim') ?>

    <?php // echo $form->field($model, 'round_money') ?>

    <?php // echo $form->field($model, 'pttype_price_policy_type_id') ?>

    <?php // echo $form->field($model, 'emp_privilege') ?>

    <?php // echo $form->field($model, 'is_pttype_plan') ?>

    <?php // echo $form->field($model, 'finance_round_money') ?>

    <?php // echo $form->field($model, 'emp_financial') ?>

    <?php // echo $form->field($model, 'pttype_eclaim_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
