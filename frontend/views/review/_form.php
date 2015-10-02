<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use dosamigos\ckeditor\CKEditor;
//use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Review */
/* @var $form yii\widgets\ActiveForm */
use common\assets\inspinia\CustomInspiniaAsset;

$custom = CustomInspiniaAsset::register($this);
?>
 

               <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Wyswig Summernote Editor</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content no-padding">

                        <div class="summernote">

                        <?php if(!$model->isNewRecord) :?>
                        	<?=$model->contents ?>
                        <?php endif; ?>
                        
                        </div>

                    </div>
                </div>
            </div>
            </div>

            <?php $form = ActiveForm::begin(); ?>

             <?= $form->field($model, 'contents')->textArea(['id'=> 'wysiwyg_try', 'class'=> 'hide'])->label(false) ?>
 
        <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'onclick' => 'trySubmit()']) ?>
    </div>
 

   			 <?php ActiveForm::end(); ?>

    <?php $this->beginBlock('JavascriptInit'); ?>

		<script src="<?=$custom->baseUrl?>/js/plugins/summernote/summernote.min.js"></script>

 	<script>
        $(document).ready(function(){

            $('.summernote').summernote();

       });
        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };

        var $summernote = $('#summernote');
$summernote.summernote({
  onImageUpload: function(files) {
    console.log('image upload:', files);
    // upload image to server and create imgNode...
    $summernote.summernote('insertNode', imgNode);
  }
});

function trySubmit() 
{

	var sHTML = $('.summernote').code();

	$('#wysiwyg_try').val(sHTML);
}
    </script>

	<?php $this->endBlock(); ?>


