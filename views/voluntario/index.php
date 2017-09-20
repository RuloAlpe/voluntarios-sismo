<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VoluntarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ent Voluntarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-voluntario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ent Voluntario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_voluntario',
            'id_localidad',
            'txt_nombre_completo',
            'txt_email:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
