<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Eci */

$this->title = $model->eci_id;
$this->params['breadcrumbs'][] = ['label' => 'Ecis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eci-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit ECI', ['update', 'id' => $model->eci_id], ['class' => 'btn btn-primary']) ?>
        <?php /*Html::a('Delete', ['delete', 'id' => $model->eci_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])*/ ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'eci_id',
            'eci_name',
            //'eci_parish_id',
            'eciParish.parish_name',
        ],
    ]) ?>

</div>
