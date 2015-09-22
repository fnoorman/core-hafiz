<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\ActiveForm;
use common\models\Country;
use common\models\Zone;
use yii\helpers\ArrayHelper;
use common\assets\inspinia\CustomInspiniaAsset;

/* @var $this yii\web\View */
/* @var $model common\models\Geozone */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Geozones'), 'url' => ['index']];
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
                            'name',
                            'description',
                            'updated_at:datetime',
                            'created_at:datetime',
                            ],
                            ]) ?>
                        </div>
                        <div class="col-lg-4">
                            <table class="table">
                                <thead>
                                <th colspan="4" class="text-center" style="background-color:#18a689; color: #fff ;">
                                    <h2>Location / Zone</h2>

                                </th>

                                </thead>
                                <tbody>
                                    <?php foreach ($allzonetogeozone as $row):?>

                                        <tr>
                                            <td><?=$row->getCountryName(); ?></td>
                                            <td>
                                              <?=$row->getZoneName(); ?>
                                            </td>
                                            <td align="right">
                                              <?=Html::a('<i class="fa fa-lg fa-trash" style="color:darkred"></i>',['geozone/delete-zone','zone_to_geozone_id'=>$row['id'],'id'=>$model->id])?>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                            <div class="col-lg-6">
                                <?php $form = ActiveForm::begin([
                                    'action'=> $zoneModel->isNewRecord ?['geozone/add-zone']:['geozone/update-zone','id'=>$zoneModel->id],
                                    'fieldConfig' => [
                                        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                                    ],
                                    'errorSummaryCssClass' => 'alert alert-danger'
                                ]) ?>

                                <?= $form->errorSummary($zoneModel);?>


                                <?= $form->field($zoneModel,'id')->hiddenInput(['value'=>$model->id])->label(false)?>

                                    <?= $form->field($zoneModel,'geo_zone_id')->hiddenInput(['value'=>$model->id])->label(false)?>

                                            <?= $form->field($zoneModel, 'country_id')
                                                 ->dropDownList(ArrayHelper::map(Country::find()->all(), 'id', 'name'),[

                                                     // 'data-placeholder'=>'Choose permission...',
                                                     'class'           =>'chosen-select',
                                                     'style'           =>'width:330px;',
                                                     'tabindex'        =>'3',
                                                     'prompt'          =>'Choose Country'
                                                 ])
                                            ?>
                                            <?= $form->field($zoneModel, 'zone_id')
                                                 ->dropDownList(ArrayHelper::map(Zone::find()->all(), 'id', 'name'),[

                                                     // 'data-placeholder'=>'Choose permission...',
                                                     'class'           =>'chosen-select',
                                                     'style'           =>'width:330px;',
                                                     'tabindex'        =>'4',
                                                     'prompt'          =>'Choose Zone'
                                                 ])
                                            ?>
                                            <input type="hidden" name="zone[id]" value="<?=$model->id; ?>">

                                <div class="form-group">
                                    <?= Html::submitButton($zoneModel->isNewRecord ? Yii::t('app', 'Add Zone') : Yii::t('app', 'Update Zone'), ['class' => $zoneModel->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
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
