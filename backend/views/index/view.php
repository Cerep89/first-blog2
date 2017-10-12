<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Index */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Indices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="index-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_image_left',
            'first_title_left',
            'first_text_left',
            'first_image_center',
            'first_title_center',
            'first_text_center',
            'first_image_right',
            'first_title_right',
            'first_text_right',
            'two_title_left',
            'two_button_left',
            'two_button_link_left',
            'two_text_center',
            'two_title_right',
            'two_text_link_one_right',
            'two_link_one_right',
            'two_text_link_two_right',
            'two_link_two_right',
            'two_text_link_three_right',
            'two_link_three_right',
            'three_background',
            'three_title',
            'three_year',
            'three_text',
            'three_proiect_one_number',
            'three_proiect_one_title',
            'three_proiect_one_text',
            'three_proiect_two_number',
            'three_proiect_two_title',
            'three_proiect_two_text',
            'three_proiect_three_number',
            'three_proiect_three_title',
            'three_proiect_three_text',
            'for_background',
            'for_title',
            'for_one_item_title',
            'for_one_item_text',
            'for_two_item_title',
            'for_two_item_text',
            'for_three_item_title',
            'for_three_item_text',
            'for_for_item_title',
            'for_for_item_text',
            'for_for_image_right',
            'five_image_left',
            'five_title_right',
            'five_text_right',
            'five_button_right',
            'five_button_link_right',
        ],
    ]) ?>

</div>
