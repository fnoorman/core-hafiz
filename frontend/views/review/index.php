<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ReviewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Reviews');
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
                                <?= Html::a(Yii::t('app', 'Create Review'), ['create'], ['class' => 'btn btn-success']) ?>
                            </p>
                        </div>
                    </div>
                                            <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'id',
                            [
                                'attribute'=>'contents',
                                'format'=>'raw'
                            ],
//                            'contents:ntext',

                            ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                    
                </div>
            </div>
        </div>
    </div>

</div>

