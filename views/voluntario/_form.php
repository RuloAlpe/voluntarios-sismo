<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\EntLocalidades;

/* @var $this yii\web\View */
/* @var $model app\models\EntVoluntario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-voluntario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_localidad')->dropDownList(ArrayHelper::map(EntLocalidades::find()->orderBy('txt_nombre')->all(), 'id_localidad', 'txt_nombre'), ['prompt'=>'Seleccionar Zona de desastre']) ?>

    <?= $form->field($model, 'txt_nombre_completo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'txt_email')->textInput(['maxlength' => true]) ?>

    <div class="col-md-6 text-center">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Voluntariarme' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <div class="col-md-6 text-center">
        <div class="form-group">
            <?=Html::a("Ya soy voluntario", ['site/index'], ['class'=>"btn btn-primary"])?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
