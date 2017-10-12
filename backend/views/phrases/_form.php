<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Phrases */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phrases-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phrases_title_')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phrases_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phrases_author')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
