<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LocalidadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Localidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-localidades-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 panel">
                <h1><?= Html::encode($this->title) ?></h1>
                <h5>Antes de agregar una nueva Zona de desastre revisa si ya existe en la lista de abajo para evitar registros duplicados</h5>

                <p><?= Html::a('Agregar una nueva zona de desastre', ['create', 'idVol' => $idVol,], ['class' => 'btn btn-success']) ?>
                </p>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        //'id_localidad',
                        'txt_nombre',
                        //'b_habilitado',

                       // ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>

            </div>
        </div>
    </div>
</div>
