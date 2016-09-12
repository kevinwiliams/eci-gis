<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ECIs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eci-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add a New ECI', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'eci_id',
            'eci_name',
            //'eci_parish_id',
            //'eciParish.parish_name',
            [
                'attribute'=>'eci_parish_name',
                'value'=>'eciParish.parish_name'
            ],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} &nbsp; &nbsp; &nbsp; {update}'],
        ],
    ]); ?>
</div>
