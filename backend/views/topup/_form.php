<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\assets\inspinia\CustomInspiniaAsset;

$custom = CustomInspiniaAsset::register($this);

/* @var $this yii\web\View */
/* @var $model common\models\Topup */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
    'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
    ],
    'errorSummaryCssClass' => 'alert alert-danger'
]); ?>
    <div class="row">

        <div class="col-lg-6">
            <?= $form->errorSummary($model); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'enable')->dropDownList(\common\models\Lookup::items('Status-Package'),[
                'class'           =>'chosen-select',
                'style'           =>'width:200px;',
                'tabindex'        =>'4',
                'prompt'          =>'Please select'
            ]) ?>

            <?= $form->field($model, 'unitPrice')->textInput() ?>

            <?= $form->field($model, 'maxCallOut')->textInput() ?>

            <?= $form->field($model, 'position')->textInput() ?>

            <?= $form->field($model, 'price')->textInput() ?>

            <?php if($model->isNewRecord):?>
                <?= $form->field($model, 'created_by')->hiddenInput(['value'=> Yii::$app->user->id])->label(false) ?>
            <?php endif;?>

            <?php if(!$model->isNewRecord):?>
                <?= $form->field($model, 'update_by')->hiddenInput(['value'=>Yii::$app->user->id])->label(false) ?>
            <?php endif;?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

        </div>


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


