<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'about_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_text')->textInput(['maxlength' => true]) ?>

    <?= Html::a('about_left_item_img', ['set-image', 'id' => $model->id, 'photo' => 'about_left_item_img'], ['class' => 'btn btn-default']) ?>

    <?= $form->field($model, 'about_left_item_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_left_item_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_left_item_text')->textInput(['maxlength' => true]) ?>

    <?= Html::a('about_center_item_img', ['set-image', 'id' => $model->id, 'photo' => 'about_center_item_img'], ['class' => 'btn btn-default']) ?>

    <?= $form->field($model, 'about_center_item_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_center_item_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_center_item_text')->textInput(['maxlength' => true]) ?>

    <?= Html::a('about_right_item_img', ['set-image', 'id' => $model->id, 'photo' => 'about_right_item_img'], ['class' => 'btn btn-default']) ?>

    <?= $form->field($model, 'about_right_item_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_right_item_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_right_item_text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
