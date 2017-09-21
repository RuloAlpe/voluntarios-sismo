<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ent-necesidades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_localidad')->hiddenInput(['value'=> $localidad->id_localidad])->label(false) ?>

    <?= $form->field($model, 'id_voluntario')->hiddenInput(['value'=> $voluntario->id_voluntario])->label(false) ?>

    <?= $form->field($model, 'txt_necesidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_elementos')->textInput() ?>

    <div class="col-md-6 text-center">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Publicar Solicitud' : 'Actualizar', ['class' =>  'btn btn-success']) ?>
        </div>
    </div>

    <div class="col-md-6 text-center">
        <div class="form-group">
            <?=Html::a("ver lista", ['necesidades/index', 'idVol'=>$voluntario->id_voluntario, 'idLoc'=>$voluntario->id_localidad], ['class'=>"btn btn-primary"])?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
