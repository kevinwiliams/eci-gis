<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeachersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'teacher_id') ?>

    <?= $form->field($model, 'teacher_eci_id') ?>

    <?= $form->field($model, 'teacher_name') ?>

    <?= $form->field($model, 'modified_on') ?>

    <?= $form->field($model, 'modified_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
