<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\EntLocalidades;

/* @var $this yii\web\View */
/* @var $model app\models\EntVoluntario */

$this->title = $model->txt_email;
//$this->params['breadcrumbs'][] = ['label' => 'Voluntarios', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-voluntario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_voluntario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_voluntario], [
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
            //'id_voluntario',
            [
                'attribute' => 'id_localidad',
                'filter' => false,
                'format' => 'raw',
                'value' => function ($model){
                    $localidad = EntLocalidades::find()->where(['id_localidad'=>$model->id_localidad])->one();
                    return  $localidad->txt_nombre;
                },
            ],
            
            'txt_nombre_completo',
            'txt_email:email',
        ],
    ]) ?>

</div>
