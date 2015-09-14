<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContestMain */

$this->title = Yii::t('app', 'Update ', [
    //'modelClass' => 'Contest Main',
]) . ' ' . $model->contest_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contest Mains'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5><?= Html::encode($this->title) ?></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content animated fadeInLeft">
                   <?php $form = ActiveForm::begin(['options'=> ['class'=> 'form-horizontal']]); ?>

                    <div style="display:none" class="form-group"><label class="col-lg-2 control-label">Contest ID</label>
                        <div class="col-lg-10"><?= $form->field($model, 'user_id')->textInput(['value'=> Yii::$app->user->id, 'class'=> 'form-control']) ?></div>
                    </div>
                    <div style="" class="form-group"><label class="col-lg-2 control-label">Contest Name</label>
                        <div class="col-lg-10"><?= $form->field($model, 'contest_name')->textInput(['maxlength' => true, 'class'=> 'form-control'])->label(false) ?></div>
                    </div>

                 
                    <div style="" class="form-group"><label class="col-lg-2 control-label">Contest Status</label>
                        <div class="col-lg-10">
                            <?= $form->field($model, 'status')->dropDownList(['1'=>'ACTIVE','0'=>'INACTIVE'])->label(false) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                   <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>

</div>
