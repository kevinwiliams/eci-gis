<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use backend\models\Parishes;
use backend\models\Teachers;
use backend\models\Eci;


/* @var $this yii\web\View */
/* @var $model backend\models\Papers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="papers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'child_name')->textInput(['maxlength' => true/*, 'readonly' => !$model->isNewRecord*/]) ?>

   <?= $form->field($model, 'paper_teacher_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Teachers::find()->all(), 'teacher_id', 'teacher_name'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a teacher ...'],
        'pluginOptions' => [
            'allowClear' => true/*, 'disabled' => true*/
        ],
        ]);
    ?>
    
<?php // $form->field($model, 'eci_id')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'paper_eci_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Eci::find()->all(), 'eci_id', 'eci_name'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a school ...'],
        'pluginOptions' => [
            'allowClear' => true/*, 'disabled' => true*/
        ],
        ]);
    ?>

<?= $form->field($model, 'paper_parish_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Parishes::find()->all(), 'parish_id', 'parish_name'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a parish ...'],
        'pluginOptions' => ['allowClear' => true/*, 'disabled' => true*/],
        ]);
    ?>



    <?php //$form->field($model, 'teacher_id')->textInput() ?>

   

    

    

    <?= $form->field($model, 'attendance')->textInput(['maxlength' => true, /*'readonly' => !$model->isNewRecord*/]) ?>

   <?= $form->field($model, 'gender')->dropDownList([ 'M' => 'M', 'F' => 'F', ], ['prompt' => '']) ?>

 
    <?php // $form->field($model, 'item_37')->textInput() ?>

    <?php // $form->field($model, 'item_38')->textInput() ?>

    <?php // $form->field($model, 'item_39')->textInput() ?>

    <?php //$form->field($model, 'item_40')->textInput() ?>

<div class="row">
          <div class="col-md-3">
            <h3>Socio-Emotional Skills</h3>
            <table cellspacing="0" cellpadding="0" class="table">
              <col width="85">
              <col width="154">
              <tr>
               
                <td width="154"><?= $form->field($model, 'item_1')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
              
                <td><?= $form->field($model, 'item_2')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
               
                <td><?= $form->field($model, 'item_3')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
              
                <td><?= $form->field($model, 'item_4')->textInput(['maxlength'=>1, 'type'=>'number'])?></td>
              </tr>
              <tr>
                
                <td><?= $form->field($model, 'item_5')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
                
                <td><?= $form->field($model, 'item_6')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
                
                <td><?= $form->field($model, 'item_7')->textInput(['maxlength'=>1, 'type'=>'number'])?></td>
              </tr>
              <tr>
               
                <td><?= $form->field($model, 'item_8')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
              
                <td><?= $form->field($model, 'item_9')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
               
                <td><?= $form->field($model, 'item_10')->textInput(['maxlength'=>1, 'type'=>'number'])?></td>
              </tr>
            </table>
          </div>
          <div class="col-md-3">
            <h3>Early Literacy Skills</h3>
            <table cellspacing="0" cellpadding="0" class="table">
              <col width="85">

              <tr>
              
                <td ><?= $form->field($model, 'item_11')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
             
                <td><?= $form->field($model, 'item_12')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
                
                <td><?= $form->field($model, 'item_13')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
                
                <td><?= $form->field($model, 'item_14')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
               
                <td><?= $form->field($model, 'item_15')->textInput(['maxlength'=>1, 'type'=>'number'])?></td>
              </tr>
              <tr>
               
                <td><?= $form->field($model, 'item_16')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
             
                <td><?= $form->field($model, 'item_17')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
           
                <td><?= $form->field($model, 'item_18')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
              
                <td><?= $form->field($model, 'item_19')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
               
                <td><?= $form->field($model, 'item_20')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              
            </table>
          </div>
          <div class="col-md-3">
            <h3>Early Numeracy Skills</h3>
            <table cellspacing="0" cellpadding="0" class="table">
              <col width="85">

              <tr>
                <td><?= $form->field($model, 'item_21')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
                
                <td><?= $form->field($model, 'item_22')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
          
                <td><?= $form->field($model, 'item_23')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
            
                <td><?= $form->field($model, 'item_24')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
             
                <td><?= $form->field($model, 'item_25')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
          
                <td><?= $form->field($model, 'item_26')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
              
                <td><?= $form->field($model, 'item_27')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
              
                <td><?= $form->field($model, 'item_28')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
          
                <td><?= $form->field($model, 'item_29')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
      
                <td><?= $form->field($model, 'item_30')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
            </table>
          </div>
          <div class="col-md-3">
            <h3>Practical</h3>
            <table cellspacing="0" cellpadding="0" class="table">
              <col width="85">

              <tr>
     
                <td ><?= $form->field($model, 'item_31')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>

                <td><?= $form->field($model, 'item_32')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>

                <td><?= $form->field($model, 'item_33')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>

                <td><?= $form->field($model, 'item_34')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>

                <td><?= $form->field($model, 'item_35')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
          
                <td><?= $form->field($model, 'item_36')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>

                <td><?= $form->field($model, 'item_37')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>

                <td><?= $form->field($model, 'item_38')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>
 
                <td><?= $form->field($model, 'item_39')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
              <tr>

                <td><?= $form->field($model, 'item_40')->textInput(['maxlength'=>1, 'type'=>'number']) ?></td>
              </tr>
            </table>
          </div>
        </div>


    <?php // $form->field($model, 'ip')->textInput() ?>

    <?php // $form->field($model, 'date_modified')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Add New Paper' : 'Update Paper Information', ['class' => $model->isNewRecord ? 'btn btn-success btn-lg' : 'btn btn-warning btn-lg']) ?>
    </div>
<br /><br />  
    <div class="row">
    <div class="col-sm-10">
      <a href="?r=papers/update&id=<?= $model->paper_id - 1 ?>"><button type="button" class="btn btn-info btn-lg">Previous</button></a>
    </div>
    <div class="col-sm-2">
      <a href="?r=papers/update&id=<?= $model->paper_id + 1 ?>"><button type="button" class="btn btn-info btn-lg">Next</button></a>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
