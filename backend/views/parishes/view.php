<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Parishes */

$this->title = $model->parish_id;
$this->params['breadcrumbs'][] = ['label' => 'Parishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parishes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->parish_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->parish_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'parish_id',
            'parish_name',
            'region',
        ],
    ]) ?>

</div>
