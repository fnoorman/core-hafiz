<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use common\models\Taxrate;
use common\assets\inspinia\CustomInspiniaAsset;

/* @var $this yii\web\View */
/* @var $model common\models\Taxclass */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Taxclasses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$custom = CustomInspiniaAsset::register($this);
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
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>
                                <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                                <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                                ],
                                ]) ?>
                            </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                          <?= DetailView::widget([
                          'model' => $model,
                          'attributes' => [
                          'id',
                          'title',
                          'description',
                          'created_at:datetime',
                          'updated_at:datetime',
                          ],
                          ]) ?>
                        </div>
                        <div class="col-lg-4">
                          <table class="table">
                              <thead>
                              <th colspan="4" class="text-center" style="background-color:#18a689; color: #fff ;">
                                  <h2>Tax Rules</h2>

                              </th>

                              </thead>
                              <tbody>
                                  <?php foreach ($alltaxrule as $row):?>

                                      <tr>
                                          <td><?=$row->getTaxRateName(); ?></td>
                                          <td>
                                            <?=$row->based; ?>
                                          </td>
                                          <td align="right">
                                            <?=Html::a('<i class="fa fa-lg fa-trash" style="color:darkred"></i>',['taxclass/delete-rule','tax_class_id'=>$row['id'],'id'=>$model->id])?>
                                          </td>
                                      </tr>
                                  <?php endforeach;?>
                              </tbody>
                          </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                          <div class="row">
                                  <div class="col-lg-6">
                                      <?php $form = ActiveForm::begin([
                                          'action'=> $classtaxRule->isNewRecord ?['taxclass/add-rule']:['taxclass/update-rule','id'=>$classtaxRule->id],
                                          'fieldConfig' => [
                                              'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                                          ],
                                          'errorSummaryCssClass' => 'alert alert-danger'
                                      ]) ?>

                                      <?= $form->errorSummary($classtaxRule);?>

                                      <?= $form->field($classtaxRule,'id')->hiddenInput(['value'=>$model->id])->label(false)?>

                                      <?= $form->field($classtaxRule,'tax_class_id')->hiddenInput(['value'=>$model->id])->label(false)?>

                                                  <?= $form->field($classtaxRule, 'tax_rate_id')
                                                       ->dropDownList(ArrayHelper::map(Taxrate::find()->all(), 'id', 'name'),[

                                                           // 'data-placeholder'=>'Choose permission...',
                                                           'class'           =>'chosen-select',
                                                           'style'           =>'width:330px;',
                                                           'tabindex'        =>'3',
                                                           'prompt'          =>'Choose Rate'
                                                       ])
                                                  ?>
                                                  <?php echo $form->field($classtaxRule, 'based')->dropDownList(['shipping' => 'Shipping Address', 'payment' => 'Payment Address', 'store' => 'Store Address'],[

                                                      // 'data-placeholder'=>'Choose permission...',
                                                      'class'           =>'chosen-select',
                                                      'style'           =>'width:330px;',
                                                      'tabindex'        =>'3',
                                                      'prompt'          =>'Choose Type'
                                                  ]); ?>
                                                  <input type="hidden" name="tax[id]" value="<?=$model->id; ?>">

                                                  <?= $form->field($classtaxRule, 'priority')->textInput(['maxlength' => true,'style'=>'width:40px;']) ?>

                                      <div class="form-group">
                                          <?= Html::submitButton($classtaxRule->isNewRecord ? Yii::t('app', 'Add Rule') : Yii::t('app', 'Update Rule'), ['class' => $classtaxRule->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                                      </div>

                                      <?php ActiveForm::end()?>
                                  </div>
                              </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

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
