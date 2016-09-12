<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Papers */

$this->title = 'Create Papers';
$this->params['breadcrumbs'][] = ['label' => 'Papers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="papers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
