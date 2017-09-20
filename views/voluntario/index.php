<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\EntLocalidades;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VoluntarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Voluntarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-voluntario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Voluntario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //S'id_voluntario',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
