<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TopupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Top Up');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5><?= Html::encode($this->title) ?> Package Information</h5>
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
                                <?= Html::a(Yii::t('app', 'Create Topup'), ['create'], ['class' => 'btn btn-success']) ?>
                            </p>
                        </div>
                    </div>
                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'tableOptions'=>['class'=>'table table-striped'],
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                    'name',
                                    [
                                        'attribute'=>'unitPrice',
                                        'format'=>'currency',
                                        'headerOptions'=>['width'=>'100px']
                                    ],

                                    [
                                        'attribute'=>'position',
                                        'headerOptions'=>['width'=>'100px']
                                    ],
                                    [
                                        'attribute'=>'maxCallOut',
                                        'headerOptions'=>['width'=>'120px']
                                    ],
                                    [
                                        'attribute'=>'enable',
                                        'format'=>'raw',
                                        'headerOptions'=>['width'=>'120px'],
                                        'value'=>function($model){
                                            return \common\models\Lookup::item('Status-Package',$model->enable);
                                        }
                                    ],
                                    'price:currency',

//                                        'updated_at:datetime',

                                    // 'update_by',
                                    // 'created_by',

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'headerOptions'=>['width'=>'100px']

                                ],
                                ],
                        ]); ?>
                    
                </div>
            </div>
        </div>
    </div>

</div>

