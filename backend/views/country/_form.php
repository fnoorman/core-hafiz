<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\assets\inspinia\CustomInspiniaAsset;
/* @var $this yii\web\View */
/* @var $model common\models\Country */
/* @var $form yii\widgets\ActiveForm */
$custom = CustomInspiniaAsset::register($this);
?>
    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        ],
        'errorSummaryCssClass' => 'alert alert-danger'
    ]); ?>
    <?= $form->errorSummary($model); ?>

    <div class="row">
        <div class="col-lg-5">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'iso_code_2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'iso_code_3')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <?= $form->field($model, 'address_format')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-lg-3">
            <?= $form->field($model, 'postcode_required')->textInput() ?>
        </div>
        <div class="col-lg-3">
          <?= $form->field($model, 'status')->dropDownList($model->StatusDropDownOptions(),[

              // 'data-placeholder'=>'Choose permission...',
              'class'           =>'chosen-select',
//                    'style'           =>'width:200px;',
              'tabindex'        =>'4',
              'prompt'          =>'Choose ACTIVE or INACTIVE...'


          ]) ?>
        </div>
    </div>

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
