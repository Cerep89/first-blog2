<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\IndexSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_image_left') ?>

    <?= $form->field($model, 'first_title_left') ?>

    <?= $form->field($model, 'first_text_left') ?>

    <?= $form->field($model, 'first_image_center') ?>

    <?php // echo $form->field($model, 'first_title_center') ?>

    <?php // echo $form->field($model, 'first_text_center') ?>

    <?php // echo $form->field($model, 'first_image_right') ?>

    <?php // echo $form->field($model, 'first_title_right') ?>

    <?php // echo $form->field($model, 'first_text_right') ?>

    <?php // echo $form->field($model, 'two_title_left') ?>

    <?php // echo $form->field($model, 'two_button_left') ?>

    <?php // echo $form->field($model, 'two_button_link_left') ?>

    <?php // echo $form->field($model, 'two_text_center') ?>

    <?php // echo $form->field($model, 'two_title_right') ?>

    <?php // echo $form->field($model, 'two_text_link_one_right') ?>

    <?php // echo $form->field($model, 'two_link_one_right') ?>

    <?php // echo $form->field($model, 'two_text_link_two_right') ?>

    <?php // echo $form->field($model, 'two_link_two_right') ?>

    <?php // echo $form->field($model, 'two_text_link_three_right') ?>

    <?php // echo $form->field($model, 'two_link_three_right') ?>

    <?php // echo $form->field($model, 'three_background') ?>

    <?php // echo $form->field($model, 'three_title') ?>

    <?php // echo $form->field($model, 'three_year') ?>

    <?php // echo $form->field($model, 'three_text') ?>

    <?php // echo $form->field($model, 'three_proiect_one_number') ?>

    <?php // echo $form->field($model, 'three_proiect_one_title') ?>

    <?php // echo $form->field($model, 'three_proiect_one_text') ?>

    <?php // echo $form->field($model, 'three_proiect_two_number') ?>

    <?php // echo $form->field($model, 'three_proiect_two_title') ?>

    <?php // echo $form->field($model, 'three_proiect_two_text') ?>

    <?php // echo $form->field($model, 'three_proiect_three_number') ?>

    <?php // echo $form->field($model, 'three_proiect_three_title') ?>

    <?php // echo $form->field($model, 'three_proiect_three_text') ?>

    <?php // echo $form->field($model, 'for_background') ?>

    <?php // echo $form->field($model, 'for_title') ?>

    <?php // echo $form->field($model, 'for_one_item_title') ?>

    <?php // echo $form->field($model, 'for_one_item_text') ?>

    <?php // echo $form->field($model, 'for_two_item_title') ?>

    <?php // echo $form->field($model, 'for_two_item_text') ?>

    <?php // echo $form->field($model, 'for_three_item_title') ?>

    <?php // echo $form->field($model, 'for_three_item_text') ?>

    <?php // echo $form->field($model, 'for_for_item_title') ?>

    <?php // echo $form->field($model, 'for_for_item_text') ?>

    <?php // echo $form->field($model, 'for_for_image_right') ?>

    <?php // echo $form->field($model, 'five_image_left') ?>

    <?php // echo $form->field($model, 'five_title_right') ?>

    <?php // echo $form->field($model, 'five_text_right') ?>

    <?php // echo $form->field($model, 'five_button_right') ?>

    <?php // echo $form->field($model, 'five_button_link_right') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
