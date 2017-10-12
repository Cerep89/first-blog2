<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AboutSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'about_title') ?>

    <?= $form->field($model, 'about_text') ?>

    <?= $form->field($model, 'about_left_item_img') ?>

    <?= $form->field($model, 'about_left_item_title') ?>

    <?php // echo $form->field($model, 'about_left_item_text') ?>

    <?php // echo $form->field($model, 'about_center_item_img') ?>

    <?php // echo $form->field($model, 'about_center_item_title') ?>

    <?php // echo $form->field($model, 'about_center_item_text') ?>

    <?php // echo $form->field($model, 'about_right_item_img') ?>

    <?php // echo $form->field($model, 'about_right_item_title') ?>

    <?php // echo $form->field($model, 'about_right_item_text') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
