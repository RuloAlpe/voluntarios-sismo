<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */

$this->title = $model->id_necesidad;
$this->params['breadcrumbs'][] = ['label' => 'Ent Necesidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-necesidades-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_necesidad], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_necesidad], [
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
            'id_necesidad',
            'id_localidad',
            'id_voluntario',
            'txt_necesidad',
            'num_elementos',
        ],
    ]) ?>

</div>
