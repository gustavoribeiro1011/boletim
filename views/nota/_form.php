<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nota')->textInput() ?>

    <?= $form->field($model, 'materia')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
