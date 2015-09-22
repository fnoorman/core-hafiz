<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TaxrateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Taxrates');
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
                                <?= Html::a(Yii::t('app', 'Create Taxrate'), ['create'], ['class' => 'btn btn-success']) ?>
                            </p>
                        </div>
                    </div>
                                            <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                          'attribute' => 'id',
                          'format'=>'raw',
                          'headerOptions'=>['width'=>'80px']
                        ],

                        [
                          'attribute' => 'geoZoneId',
                          'label'=> 'Geo Zone',
                          'value'=> function($model){
                              return $model->getGeozoneName();
                              }
                        ],
                        [
                          'attribute' => 'name',
                          'format'=>'raw',
                          'headerOptions'=>['width'=>'300px']
                        ],
                        [
                          'attribute' => 'rate',
                          'format'=>'raw',
                          'headerOptions'=>['width'=>'100px']
                        ],
                        [
                          'attribute' => 'type',
                          'format'=>'raw',
                          //'value'=> if($model->type == "P"): "Percentage"; else : "Fixed Amount"; endif;
                          'headerOptions'=>['width'=>'150px']
                        ],

                        // 'created_at',
                        // 'updated_at',
                        ['class' => 'yii\grid\ActionColumn'],
                        ],
                        ]); ?>

                </div>
            </div>
        </div>
    </div>

</div>
