<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contacts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contact_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_title_one')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_text_one')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_title_two')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_text_two')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_title_three')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_text_three')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_title_for')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_text_for')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
