<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use backend\models\Parishes;

/* @var $this yii\web\View */
/* @var $model backend\models\Eci */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eci-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eci_name')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'eci_parish_id')->textInput() ?>
    <?= $form->field($model, 'eci_parish_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Parishes::find()->all(), 'parish_id', 'parish_name'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a parish ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
