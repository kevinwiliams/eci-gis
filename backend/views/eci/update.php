<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Eci */

$this->title = 'Update ECI: ' . $model->eci_id;
$this->params['breadcrumbs'][] = ['label' => 'Ecis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eci_id, 'url' => ['view', 'id' => $model->eci_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eci-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
