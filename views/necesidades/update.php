<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */

$this->title = 'Actualizar Necesidades: ' . $model->txt_necesidad;
$this->params['breadcrumbs'][] = ['label' => 'Necesidades', 'url' => ['index', 'idVol'=>$voluntario->id_voluntario, 'idLoc'=>$localidad->id_localidad]];
$this->params['breadcrumbs'][] = ['label' => $model->id_necesidad, 'url' => ['view', 'id' => $model->id_necesidad]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="ent-necesidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'localidad' => $localidad,
        'voluntario' => $voluntario
    ]) ?>

</div>
