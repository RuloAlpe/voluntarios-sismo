<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntLocalidades */

$this->title = 'Actualizar Localidades: ' . $model->txt_nombre;
//$this->params['breadcrumbs'][] = ['label' => 'Ent Localidades', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id_localidad, 'url' => ['view', 'id' => $model->id_localidad]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ent-localidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
