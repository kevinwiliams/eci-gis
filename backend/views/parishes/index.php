<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ParishesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parishes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parishes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Parishes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'parish_id',
            'parish_name',
            'region',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
