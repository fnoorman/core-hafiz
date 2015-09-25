<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Discount */
/* @var $form yii\widgets\ActiveForm */
?>



    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        ],
        'errorSummaryCssClass' => 'alert alert-danger'
    ]); ?>
    <?= $form->errorSummary($model); ?>

    <div class="row">
        <div class="col-lg-2">
          <?= $form->field($model, 'product_id')->textInput() ?>
        </div>
        <div class="col-lg-2">
          <?= $form->field($model, 'customerGroupId')->textInput() ?>
        </div>
        <div class="col-lg-2">
          <?= $form->field($model, 'quantity')->textInput() ?>
        </div>
        <div class="col-lg-2">
          <?= $form->field($model, 'priority')->textInput() ?>
        </div>
        <div class="col-lg-2">
          <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
          <?= $form->field($model, 'startDate')->textInput() ?>
        </div>
        <div class="col-lg-2">
          <?= $form->field($model, 'endDate')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
