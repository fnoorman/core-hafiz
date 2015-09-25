<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Countries');
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
                                <?= Html::a(Yii::t('app', 'Create Country'), ['create'], ['class' => 'btn btn-success']) ?>
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
                            'attribute' => 'name',
                            'format'=>'raw',
                            'headerOptions'=>['width'=>'320px']
                        ],
                        [
                            'attribute' => 'iso_code_2',
                            'format'=>'raw',
                            'headerOptions'=>['width'=>'100px']
                        ],
                        [
                            'attribute' => 'iso_code_3',
                            'format'=>'raw',
                            'headerOptions'=>['width'=>'100px']
                        ],

                        'address_format:ntext',
                        // 'postcode_required',
                        // 'status',

                        ['class' => 'yii\grid\ActionColumn'],
                        ],
                        ]); ?>

                </div>
            </div>
        </div>
    </div>

</div>
