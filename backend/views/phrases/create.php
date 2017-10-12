<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Phrases */

$this->title = 'Create Phrases';
$this->params['breadcrumbs'][] = ['label' => 'Phrases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrases-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
