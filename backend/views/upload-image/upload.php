<?php
/* @var $this yii\web\View */

use yii\widgets\ActiveForm;

?>


<h1>upload-image/upload</h1>



<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>
<?= $form->field($model, 'contestName')->textInput() ?>

<button>Submit</button>

<?php ActiveForm::end() ?>


