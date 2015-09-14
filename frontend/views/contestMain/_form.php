<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContestMain */
/* @var $form yii\widgets\ActiveForm */
?>



    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

	    <?= $form->field($model, 'user_id')->textInput(['value'=> Yii::$app->user->id]) ?>

	    <?= $form->field($model, 'contest_name')->textInput(['maxlength' => true]) ?>

	    <?= $form->field($model, 'file_image')->fileInput() ?>

	    <?= $form->field($model, 'status')->textInput(['value'=> '1']) ?>

	    <div class="form-group">
	     	<?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'create-button']) ?>
	    </div>

    <?php ActiveForm::end(); ?>


