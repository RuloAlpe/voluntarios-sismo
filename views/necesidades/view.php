<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */

$this->title = $model->txt_necesidad;
$this->params['breadcrumbs'][] = ['label' => 'Necesidades', 'url' => ['index', 'idVol'=>$voluntario->id_voluntario, 'idLoc'=>$localidad->id_localidad]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-necesidades-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_necesidad], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_necesidad], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_necesidad',
            //'id_localidad',
            //'id_voluntario',
            'txt_necesidad',
            'num_elementos',
        ],
    ]) ?>

</div>
