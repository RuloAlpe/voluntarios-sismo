<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NecesidadesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-necesidades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_necesidad') ?>

    <?= $form->field($model, 'id_localidad') ?>

    <?= $form->field($model, 'id_voluntario') ?>

    <?= $form->field($model, 'txt_necesidad') ?>

    <?= $form->field($model, 'num_elementos') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
