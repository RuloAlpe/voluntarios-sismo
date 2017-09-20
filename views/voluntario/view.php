<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EntVoluntario */

$this->title = $model->id_voluntario;
$this->params['breadcrumbs'][] = ['label' => 'Ent Voluntarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-voluntario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_voluntario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_voluntario], [
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
            'id_voluntario',
            'id_localidad',
            'txt_nombre_completo',
            'txt_email:email',
        ],
    ]) ?>

</div>
