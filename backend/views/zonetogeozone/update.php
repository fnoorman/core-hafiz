<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Zonetogeozone */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Zonetogeozone',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Zonetogeozones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'geo_zone_id' => $model->geo_zone_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
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
                    <?= $this->render('_form', [
                    'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

</div>
