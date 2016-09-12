<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PapersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="papers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'paper_id') ?>

    <?= $form->field($model, 'paper_parish_id') ?>

    <?= $form->field($model, 'paper_teacher_id') ?>

    <?= $form->field($model, 'paper_eci_id') ?>

    <?= $form->field($model, 'child_name') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'attendance') ?>

    <?php // echo $form->field($model, 'item_1') ?>

    <?php // echo $form->field($model, 'item_2') ?>

    <?php // echo $form->field($model, 'item_3') ?>

    <?php // echo $form->field($model, 'item_4') ?>

    <?php // echo $form->field($model, 'item_5') ?>

    <?php // echo $form->field($model, 'item_6') ?>

    <?php // echo $form->field($model, 'item_7') ?>

    <?php // echo $form->field($model, 'item_8') ?>

    <?php // echo $form->field($model, 'item_9') ?>

    <?php // echo $form->field($model, 'item_10') ?>

    <?php // echo $form->field($model, 'item_11') ?>

    <?php // echo $form->field($model, 'item_12') ?>

    <?php // echo $form->field($model, 'item_13') ?>

    <?php // echo $form->field($model, 'item_14') ?>

    <?php // echo $form->field($model, 'item_15') ?>

    <?php // echo $form->field($model, 'item_16') ?>

    <?php // echo $form->field($model, 'item_17') ?>

    <?php // echo $form->field($model, 'item_18') ?>

    <?php // echo $form->field($model, 'item_19') ?>

    <?php // echo $form->field($model, 'item_20') ?>

    <?php // echo $form->field($model, 'item_21') ?>

    <?php // echo $form->field($model, 'item_22') ?>

    <?php // echo $form->field($model, 'item_23') ?>

    <?php // echo $form->field($model, 'item_24') ?>

    <?php // echo $form->field($model, 'item_25') ?>

    <?php // echo $form->field($model, 'item_26') ?>

    <?php // echo $form->field($model, 'item_27') ?>

    <?php // echo $form->field($model, 'item_28') ?>

    <?php // echo $form->field($model, 'item_29') ?>

    <?php // echo $form->field($model, 'item_30') ?>

    <?php // echo $form->field($model, 'item_31') ?>

    <?php // echo $form->field($model, 'item_32') ?>

    <?php // echo $form->field($model, 'item_33') ?>

    <?php // echo $form->field($model, 'item_34') ?>

    <?php // echo $form->field($model, 'item_35') ?>

    <?php // echo $form->field($model, 'item_36') ?>

    <?php // echo $form->field($model, 'item_37') ?>

    <?php // echo $form->field($model, 'item_38') ?>

    <?php // echo $form->field($model, 'item_39') ?>

    <?php // echo $form->field($model, 'item_40') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <?php // echo $form->field($model, 'date_modified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
