<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PapersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Papers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="papers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add New Paper', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'paper_id',
            //'paper_parish_id',
            //'paperParish.parish_name',
            [
                'attribute'=>'paper_parish_id',
                'value'=>'paperParish.parish_name'
            ],
            //'paper_teacher_id',
            //'paperTeacher.teacher_name',
            [
                'attribute'=>'paper_teacher_id',
                'value'=>'paperTeacher.teacher_name'
            ],
            //'paper_eci_id',
            //'paperEci.eci_name',
            [
                'attribute'=>'paper_eci_id',
                'value'=>'paperEci.eci_name'
            ],
            'child_name',
			'gender',
            // 'attendance',
            // 'item_1',
            // 'item_2',
            // 'item_3',
            // 'item_4',
            // 'item_5',
            // 'item_6',
            // 'item_7',
            // 'item_8',
            // 'item_9',
            // 'item_10',
            // 'item_11',
            // 'item_12',
            // 'item_13',
            // 'item_14',
            // 'item_15',
            // 'item_16',
            // 'item_17',
            // 'item_18',
            // 'item_19',
            // 'item_20',
            // 'item_21',
            // 'item_22',
            // 'item_23',
            // 'item_24',
            // 'item_25',
            // 'item_26',
            // 'item_27',
            // 'item_28',
            // 'item_29',
            // 'item_30',
            // 'item_31',
            // 'item_32',
            // 'item_33',
            // 'item_34',
            // 'item_35',
            // 'item_36',
            // 'item_37',
            // 'item_38',
            // 'item_39',
            // 'item_40',
            // 'ip',
            // 'date_modified',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} &nbsp; &nbsp; &nbsp; {update}'],
        ],
    ]); ?>
</div>
