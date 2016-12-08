<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\fct\models\Pttype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pttype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'editmask')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isuse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requirecode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'doctor_fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fee_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discount')->textInput() ?>

    <?= $form->field($model, 'contract')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paidst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'in_region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'require_hcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oldcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fee_code2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_type')->textInput() ?>

    <?= $form->field($model, 'debtor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'noexpire')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hipdata_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'min_age')->textInput() ?>

    <?= $form->field($model, 'max_age')->textInput() ?>

    <?= $form->field($model, 'bill_sss')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bill_type')->textInput() ?>

    <?= $form->field($model, 'hipdata_pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'use_contract_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yearly_charge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yearly_charge_icode1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yearly_charge_icode2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_type')->textInput() ?>

    <?= $form->field($model, 'pttype_group1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype_group2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'max_debt_money')->textInput() ?>

    <?= $form->field($model, 'allow_finance_edit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'print_csmb_statement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype_information')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fee_code_paidst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fee_code2_paidst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'debt_due_day')->textInput() ?>

    <?= $form->field($model, 'rx_pay_debit_tr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'separate_rcpno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rcp_bookno')->textInput() ?>

    <?= $form->field($model, 'separate_debt_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admit_fee_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'use_package')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'charge_df_perday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nhso_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ipd_hour_cut')->textInput() ?>

    <?= $form->field($model, 'pttype_spp_id')->textInput() ?>

    <?= $form->field($model, 'print_presc_ned')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hos_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sks_benefit_plan_type_id')->textInput() ?>

    <?= $form->field($model, 'pttype_std_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'export_eclaim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'round_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype_price_policy_type_id')->textInput() ?>

    <?= $form->field($model, 'emp_privilege')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_pttype_plan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'finance_round_money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_financial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype_eclaim_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
