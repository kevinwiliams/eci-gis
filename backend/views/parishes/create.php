<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Parishes */

$this->title = 'Create Parishes';
$this->params['breadcrumbs'][] = ['label' => 'Parishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parishes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
