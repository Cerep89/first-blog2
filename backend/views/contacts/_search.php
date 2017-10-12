<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ContactsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contacts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'contact_title') ?>

    <?= $form->field($model, 'contact_text') ?>

    <?= $form->field($model, 'contact_title_one') ?>

    <?= $form->field($model, 'contact_text_one') ?>

    <?php // echo $form->field($model, 'contact_title_two') ?>

    <?php // echo $form->field($model, 'contact_text_two') ?>

    <?php // echo $form->field($model, 'contact_title_three') ?>

    <?php // echo $form->field($model, 'contact_text_three') ?>

    <?php // echo $form->field($model, 'contact_title_for') ?>

    <?php // echo $form->field($model, 'contact_text_for') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
