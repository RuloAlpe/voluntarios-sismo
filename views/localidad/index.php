<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LocalidadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Localidades';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-localidades-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Localidades', ['create', 'idVol' => $idVol], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_localidad',
            'txt_nombre',
            //'b_habilitado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
