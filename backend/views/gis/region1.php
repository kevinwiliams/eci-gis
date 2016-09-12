<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ECC GIS Data';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gis', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'query' => $query,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'gis_id',
            //'eccid',
            'eci_name',
            //'address',
            //'telephone',
            // 'community',
             [
                'attribute'=>'eci_community_id',
                'value'=>'eciCommunity.community'
            ],
            // 'constituency',
             [
                'attribute'=>'eci_con_id',
                'value'=>'eciConstituency.constituency'
            ],
             //'parish',
             [
                'attribute'=>'eci_parish_id',
                'value'=>'eciParish.parish_name'
            ],
            // 'region',
            // 'facility_type',
            // 'email:email',
            // 'latitude',
            // 'longitude',
             'latlng',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
