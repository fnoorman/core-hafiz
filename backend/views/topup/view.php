<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Topup */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
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
                                'template'=>'<tr><th width="35%">{label}</th><td>{value}</td></tr>',
                                'options'=>['class'=>'table table-striped'],
                                'model' => $model,
                                'attributes' => [
                                    'id',
                                    [
                                        'attribute'=>'enable',
                                        'value'=> \common\models\Lookup::item('Status-Package',$model->enable)
                                    ],

                                    'name',
                                    'unitPrice:currency',
                                    'maxCallOut',

                                ],
                            ]) ?>
                        </div>
                        <div class="col-lg-6">
                            <?= DetailView::widget([
                                'template'=>'<tr><th width="35%">{label}</th><td>{value}</td></tr>',
                                'options'=>['class'=>'table table-striped'],
                                'model' => $model,
                                'attributes' => [

                                    'updated_at:datetime',
                                    'created_at:datetime',
                                    'update_by',
                                    'created_by',
                                    'price:currency'
                                ],

                            ]) ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>

