<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ZonetogeozoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Zone To Geo Zones');
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
                            <!-- <p>
                                <?php //= Html::a(Yii::t('app', 'Create Zonetogeozone'), ['create'], ['class' => 'btn btn-success']) ?>
                            </p> -->
                        </div>
                    </div>
                        <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'attribute' => 'id',
                            'headerOptions'=>['width'=>'80px']
                        ],
                        [
                          'attribute' => 'country_id',
                          'label'=> 'Country',
                          'value'=> function($model){
                              return $model->getCountryName();
                              }
                        ],
                        [
                          'attribute' => 'zone_id',
                          'label'=> 'Zone',
                          'value'=> function($model){
                              return $model->getZoneName();
                              }
                        ],
                        [
                          'attribute' => 'geo_zone_id',
                          'label'=> 'Geo Zone',
                          'value'=> function($model){
                              return $model->getGeozoneName();
                              }
                        ],
                        // 'created_at:datetime',
                        // 'updated_at:datetime',
                        ['class' => 'yii\grid\ActionColumn'],
                        ],
                        ]); ?>

                </div>
            </div>
        </div>
    </div>

</div>
