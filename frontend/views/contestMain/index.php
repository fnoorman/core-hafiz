<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContestMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Contest');
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
                                <?= Html::a(Yii::t('app', '<i class="fa fa-plus-square-o"></i> Create New Contest'), ['create'], ['class' => 'btn btn-success']) ?>
                            </p>
                        </div>
                    </div>

                        <?= GridView::widget([

                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn','header' => 'No.'],

                               // 'id',
                                //'user_id',
                                'contest_name',
                                [
                                    'attribute' => 'status',
                                    'format'    => 'html',
                                    'value'     => function($model){
                                        return $model->statustext;
                                    }
                                ],
                                'created_at:date',
                            ['class' => 'yii\grid\ActionColumn','header' => 'Action'],

                        ],
                        ]); ?>
                    
                </div>
                <?php
                //echo Url::base(true);
                //echo $model->image;
                ?>
            </div>
        </div>
    </div>

</div>