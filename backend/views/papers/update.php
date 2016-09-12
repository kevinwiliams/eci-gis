<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Papers */

$this->title = 'Update Paper: ' . $model->paper_id;
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->paper_id, 'url' => ['view', 'id' => $model->paper_id]];
$this->params['breadcrumbs'][] = 'Update Paper';
?>
<div class="papers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
