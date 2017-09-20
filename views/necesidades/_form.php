<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-necesidades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_localidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_voluntario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_necesidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_elementos')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
