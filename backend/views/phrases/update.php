<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Phrases */

$this->title = 'Update Phrases: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Phrases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phrases-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
