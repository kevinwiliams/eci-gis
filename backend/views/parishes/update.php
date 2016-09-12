<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Parishes */

$this->title = 'Update Parishes: ' . $model->parish_id;
$this->params['breadcrumbs'][] = ['label' => 'Parishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->parish_id, 'url' => ['view', 'id' => $model->parish_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parishes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
