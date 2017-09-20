<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */

$this->title = 'Crear Necesidades';
//$this->params['breadcrumbs'][] = ['label' => 'Necesidades', 'url' => ['index', 'idVol'=>$idVol, 'idLoc'=>$idLoc]];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-necesidades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'localidad' => $localidad,
        'voluntario' => $voluntario
    ]) ?>

</div>
