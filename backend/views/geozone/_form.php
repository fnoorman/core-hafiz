<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Country;
use common\models\Zone;
use yii\helpers\ArrayHelper;
use common\assets\inspinia\CustomInspiniaAsset;

/* @var $this yii\web\View */
/* @var $model common\models\Geozone */
/* @var $form yii\widgets\ActiveForm */
$custom = CustomInspiniaAsset::register($this);
?>



    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        ],
        'errorSummaryCssClass' => 'alert alert-danger'
        ]);
    ?>
    <?= $form->errorSummary($model); ?>

    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>

    </div>
    





    <?php if(isset($model->id)):?>
        <?= $form->field($model,'created_at')->hiddenInput(['value'=>$model->created_at])->label(false) ?>
        <?= $form->field($model,'updated_at',[])->hiddenInput(['value'=>$model->updated_at])->label(false) ?>
    <?php else:?>
        <?= $form->field($model,'updated_at')->hiddenInput(['value'=>$model->created_at])->label(false) ?>
        <?= $form->field($model,'created_at')->hiddenInput(['value'=>$model->updated_at])->label(false) ?>
    <?php endif;?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <?php $this->beginBlock('JavascriptInit'); ?>

    <!-- Chosen -->

    <script src="<?=$custom->baseUrl?>/js/plugins/chosen/chosen.jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        });

    </script>

    <?php $this->endBlock(); ?>
