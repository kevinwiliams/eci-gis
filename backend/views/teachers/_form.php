<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Eci;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'teacher_eci_id')->textInput() ?>

    <?= $form->field($model, 'teacher_eci_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Eci::find()->all(), 'eci_id', 'eci_name'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a school ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>

    <?= $form->field($model, 'teacher_name')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'modified_on')->textInput() ?>

    <?php //$form->field($model, 'modified_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
