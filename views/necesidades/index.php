<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NecesidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ent Necesidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-necesidades-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ent Necesidades', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_necesidad',
            'id_localidad',
            'id_voluntario',
            'txt_necesidad',
            'num_elementos',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
