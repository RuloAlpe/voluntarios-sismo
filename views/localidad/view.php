<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EntLocalidades */

$this->title = $model->id_localidad;
$this->params['breadcrumbs'][] = ['label' => 'Ent Localidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-localidades-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_localidad], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_localidad], [
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
            'id_localidad',
            'txt_nombre',
            'b_habilitado',
        ],
    ]) ?>

</div>
