<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Falta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="falta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'falta')->textInput() ?>

    <?= $form->field($model, 'materia')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
