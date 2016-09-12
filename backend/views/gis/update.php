<?php

use yii\helpers\Html;
use tugmaks\GoogleMaps\Map;

/* @var $this yii\web\View */
/* @var $model backend\models\Gis */

$this->title = 'Update Data: ' . $model->gis_id;
$this->params['breadcrumbs'][] = ['label' => 'Gis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gis_id, 'url' => ['view', 'id' => $model->gis_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
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
