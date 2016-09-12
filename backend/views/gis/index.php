<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = (isset($region)) ? 'GIS Data Region '. $region : 'GIS Data All Regions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gis-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //= Html::a('Create Gis', ['create'], ['class' => 'btn btn-success']) ?>
        <a href="http://maps.google.com" target="_blank" class="btn btn-info" role="button">Open Google Maps</a>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions'   => function ($model, $key, $index, $grid) {
            return ['data-id' => $model->gis_id, 'style' =>'cursor: pointer'];
            },
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

            //['class' => 'yii\grid\ActionColumn'],
            //['class' => 'yii\grid\ActionColumn', 'template' => '{view} &nbsp; &nbsp; &nbsp; {update}'],
        ],
    ]); ?>
</div>
<?php
$this->registerJs("

    $('td').click(function (e) {
        var id = $(this).closest('tr').data('id');
        if(e.target == this)
            location.href = '" . Url::to(['gis/update']) . "&id=' + id;
    });

");
?>