<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Index */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="index-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::a('Set Image', ['set-image', 'id' => $model->id, 'a' => 'first_image_center'], ['class' => 'btn btn-default']) ?>


    <?= $form->field($model, 'first_image_left')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_title_left')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_text_left')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_image_center')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_title_center')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_text_center')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_image_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_title_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_text_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_title_left')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_button_left')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_button_link_left')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_text_center')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_title_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_text_link_one_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_link_one_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_text_link_two_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_link_two_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_text_link_three_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_link_three_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_background')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_year')->textInput() ?>

    <?= $form->field($model, 'three_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_proiect_one_number')->textInput() ?>

    <?= $form->field($model, 'three_proiect_one_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_proiect_one_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_proiect_two_number')->textInput() ?>

    <?= $form->field($model, 'three_proiect_two_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_proiect_two_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_proiect_three_number')->textInput() ?>

    <?= $form->field($model, 'three_proiect_three_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_proiect_three_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_background')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_one_item_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_one_item_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_two_item_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_two_item_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_three_item_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_three_item_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_for_item_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_for_item_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'for_for_image_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'five_image_left')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'five_title_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'five_text_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'five_button_right')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'five_button_link_right')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
