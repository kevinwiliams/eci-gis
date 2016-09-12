<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use tugmaks\GoogleMaps\Map;


/* @var $this yii\web\View */
/* @var $model backend\models\Gis */

$this->title = $model->gis_id;
$this->params['breadcrumbs'][] = ['label' => 'Gis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gis-view">

    <h1><?= Html::encode($model->eccid) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->gis_id], ['class' => 'btn btn-primary']) ?> 
        <?php 
            //echo $region;
           // echo $session->get('region');
        //= Html::a('Delete', ['delete', 'id' => $model->gis_id], [
            //'class' => 'btn btn-danger',
           // 'data' => [
           //     'confirm' => 'Are you sure you want to delete this item?',
           //     'method' => 'post',
           // ],
        //]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'gis_id',
           // 'eccid',
            'eci_name',
            'address',
            'telephone',
            'eciCommunity.community',
            'eciConstituency.constituency',
            'eciParish.parish_name',
           // 'region',
            //'facility_type',
           // 'email:email',
           // 'latitude',
            //'longitude',
            'latlng',
        ],
    ]) ?>
    <?php

    if(!empty($model->latlng)){
    $lat = (explode(",", $model->latlng)[0]);
    $lng = (explode(",", $model->latlng)[1]);

        echo Map::widget([
            'apiKey'=> 'AIzaSyCHJuG56hgBgwB8GEPbCl-l58r7RZzkFxg',
            'zoom' => 17,
            'center' => [$lat, $lng],
            'width' => 700,
            'height' => 400,
            'mapType' => Map::MAP_TYPE_ROADMAP,
            'markers' => [
                ['title' => $model->eci_name, 'position' => $model->latlng],

            ]
        ]);
    }
    
    ?>

</div>
