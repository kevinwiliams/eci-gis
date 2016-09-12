<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GisSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gis-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'gis_id') ?>

    <?= $form->field($model, 'eccid') ?>

    <?= $form->field($model, 'eci_name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'telephone') ?>

    <?php // echo $form->field($model, 'community') ?>

    <?php // echo $form->field($model, 'constituency') ?>

    <?php // echo $form->field($model, 'parish') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'facility_type') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

     <?php  echo $form->field($model, 'latlng') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
