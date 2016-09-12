<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use backend\models\Parishes;
use backend\models\Communities;
use backend\models\Constituencies;

/* @var $this yii\web\View */
/* @var $model backend\models\Gis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eccid')->textInput(['maxlength' => true, 'readonly' => !$model->isNewRecord]) ?>

    <?= $form->field($model, 'eci_name')->textInput(['maxlength' => true, 'readonly' => !$model->isNewRecord]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone')->textInput(['maxlength' => true, 'readonly' => !$model->isNewRecord]) ?>

    <?php //= $form->field($model, 'community')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eci_community_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Communities::find()->distinct()->all(), 'comm_id', 'community'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a community ...'],
        'pluginOptions' => [
            'allowClear' => true/*, 'disabled' => true*/
        ],
        ]);
    ?>

    <?php //= $form->field($model, 'constituency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eci_con_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Constituencies::find()->all(), 'con_id', 'constituency'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a constituency ...'],
        'pluginOptions' => [
            'allowClear' => true/*, 'disabled' => true*/
        ],
        ]);
    ?>

    <?php //= $form->field($model, 'parish')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eci_parish_id')->widget(Select2::classname(), [
        'data' =>  ArrayHelper::map(Parishes::find()->distinct()->all(), 'parish_id', 'parish_name'),
        'language' => 'en',
        'options' => ['placeholder' => 'Select a parish ...'],
        'pluginOptions' => [
            'allowClear' => true/*, 'disabled' => true*/
        ],
        ]);
    ?>


    <?php //= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'facility_type')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php //= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latlng')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?php
            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        ?>
        <a href="<?=$url ?>" class="btn btn-info" role="button">Cancel</a>
    </div>

    <?php ActiveForm::end(); ?>

</div>
