<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContestMain */

$this->title = $model->contest_name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contest Mains'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->contest_name;
?>

<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5><?= Html::encode($model->contest_name) ?></h5>
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

                               
                               <a onclick="showContestFullDetails()" class="btn btn-primary pull-right" type="button"><i class="fa fa-check-square"></i> <strong>Contest Full View</strong></a>
                                <button style="margin-right:5px" onclick="showQuestionForm()" class="btn btn-primary pull-right" type="button"><i class="fa fa-plus-square-o"></i> <strong>Add Question</strong></button> &nbsp;&nbsp; 
                            </p>
                        </div>
                    </div>



                    <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                                'id', 'contest_name', 'status', 'created_at:date'],
                    ]) ?>

                </div>
            </div>
        </div>
    </div>

    <p id="allHiddenInput" style="display:none">
        <input type="text" id="currentContestID" value="<?=$model->id?>">
        <input type="text" id="currentFullViewLink" value="<?= Url::to(['contestmain/getjsoncontest_specific'])?>">
        <input type="text" id="linkTOdeleteContest" value="<?=Yii::$app->urlManager->createUrl('contest/delete_remote')?>">
        <a href="<?= Url::to(['contestmain/getjsoncontest_specific'])?>" data-method="post">..zfdsfd.</a>
    </p>

            <div class="row">


                <div style="display:none" id="addQuestionRow" class="col-lg-5 animated fadeInLeft">
                            <div class="panel panel-primary">
                                 <div class="panel-heading">
                                          <h3>  <b class=""><?=$model->contest_name?></b> </h3> 

                                  </div>
                           <div class="panel-body">
                           <div class="form-group">

                           <div class="col-sm-12 m-b-xs"><center>
                                    <div data-toggle="buttons" class="btn-group">
                                        <label onclick="newObQuestion()" class="btn btn-sm btn-white"> <input type="radio" id="option1"> New Objective Question </label>
                                        <label onclick="closeQuestionDetailPane()" class="btn btn-sm btn-white active"> <input type="radio"> || </label>  
                                        <label onclick="newSubQuestion()" class="btn btn-sm btn-white"> <input type="radio" id="option3"> New Subjective Question </label>
                                    </div></center>
                                </div>
                                   <!--  <div class="col-lg-12">
                                        <button onclick="newObQuestion()" class="btn btn-w-m btn-warning" type="submit">Add New Objective Question</button>
                                        <button onclick="newSubQuestion()" class="btn btn-w-m btn-warning" type="submit">Add New Subjective Question</button>
                                    </div> -->
                                        <br><br> 

                                </div>

                                <div id="contest_details_form" style="display:none" class="ibox-content animated fadeInLeft">
                           
                    <?php $form = ActiveForm::begin(['id'=>'contestDetailForm','options'=> ['class'=> 'form-horizontal']]); ?>
                    <p> <b id="question_label"></b> </p>

                                <div style="display:none" class="form-group"><label class="col-lg-2 control-label">Contest ID</label>
                                    <div class="col-lg-10"> <?= $form->field($contestDetail, 'contest_id')->textInput(['value'=> $model->id, 'class'=> 'form-control'])->label(false) ?></div>
                                </div>
                                <div style="display:none" class="form-group"><label class="col-lg-2 control-label">Question ID</label>
                                    <div class="col-lg-10"> <?= $form->field($contestDetail, 'question_id')->textInput(['id'=> 'question_id', 'class'=> 'form-control'])->label(false) ?></div>
                                </div>
                                <div style="display:none" class="form-group"><label class="col-lg-2 control-label">Question Type</label>
                                    <div class="col-lg-10"> <?= $form->field($contestDetail, 'question_type')->textInput(['id'=> 'question_type', 'class'=> 'form-control'])->label(false) ?></div>
                                </div>
                                <div class="form-group"><label class="col-lg-2 control-label">Question</label>
                                    <div class="col-lg-10"> <?= $form->field($contestDetail, 'question')->textarea(['id'=> 'question_text', 'rows' => 2,'class'=> 'form-control'])->label(false) ?></div>
                                </div>

                                <div id="ObjectiveAnswer_options" style="display:none">

                                    <div class="form-group"><label class="col-lg-2 control-label">Option A</label>
                                        <div class="col-lg-10"><?= $form->field($contestDetail, 'A')->textInput(['id'=>'A','class'=> 'form-control'])->label(false) ?></div>
                                    </div>
                                     <div class="form-group"><label class="col-lg-2 control-label">Option B</label>
                                        <div class="col-lg-10"><?= $form->field($contestDetail, 'B')->textInput(['id'=>'B','class'=> 'form-control'])->label(false) ?></div>
                                    </div>
                                     <div class="form-group"><label class="col-lg-2 control-label">Option C</label>
                                        <div class="col-lg-10"><?= $form->field($contestDetail, 'C')->textInput(['id'=>'C','class'=> 'form-control'])->label(false) ?></div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">Option D</label>
                                        <div class="col-lg-10"><?= $form->field($contestDetail, 'D')->textInput(['id'=>'D','class'=> 'form-control'])->label(false) ?></div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-2 control-label">Correct Answer</label>
                                        <div class="col-lg-10"> <?= $form->field($contestDetail, 'Correct')->dropDownList(['A'=>'Option A','B'=>'Option B','C'=>'Option C','D'=>'Option D'])->label(false) ?></div>
                                    </div>

                                   
                                
                                </div>

                                <div id="answer_scheme" class="form-group"><label class="col-lg-2 control-label">Answer Scheme</label>
                                    <div class="col-lg-10"> <?= $form->field($contestDetail, 'answer')->textarea(['rows' => 2, 'id'=>'answer_id_text', 'class'=> 'form-control'])->label(false) ?></div>
                                </div>
                                <div id="question_status" class="form-group"><label class="col-lg-2 control-label">status</label>
                                    <div class="col-lg-10"> <?= $form->field($contestDetail, 'status')->textInput(['value'=> 1,'id'=> 'status','class'=> 'form-control'])->label(false) ?></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contest-button']) ?>
                                    </div>
                                </div>

                    <?php ActiveForm::end(); ?>

                           
                        </div>

                                 
                           </div>
                       </div>
                    </div>
            
 
         <div style="display:none" id="fullView_question_pane">
             <div class="col-lg-7">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                         <h5>  <b class=""><?=$model->contest_name?></b> </h5>
                        <div class="ibox-tools">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a class="collapse-link" href="#">Minimize/Maximize</a>
                                </li>
                                <li><a onclick="hideContestFullDetails()" href="#">Close</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ibox-content" id="fullView_question">
                        <!-- js rendered content -->
                         
                    </div>
                </div>
            </div> 
        </div> 
        </div>             
</div>

