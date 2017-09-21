<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NecesidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Que se requiere';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            
            <div class="ent-necesidades-index">

            <h1><?= Html::encode($this->title) ?></h1>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            
            <h5>
                Revisa que la solicitud para la localidad que seleccionaste no exista ya en el listado para evitar duplicidad de datos.
            </h5>

            <p>
                <?= Html::a('Crear una nueva solicitud', ['create', 'idVol'=>$idVol, 'idLoc'=>$idLoc], ['class' => 'btn btn-warning']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'id_necesidad',
                    //'id_localidad',
                    //'id_voluntario',
                    'txt_necesidad',
                    'num_elementos',
                    'fch_creacion',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>

            </div>
        </div>
    </div>
</div>

