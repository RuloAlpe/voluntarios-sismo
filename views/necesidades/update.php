<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */

$this->title = 'Update Ent Necesidades: ' . $model->id_necesidad;
$this->params['breadcrumbs'][] = ['label' => 'Ent Necesidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_necesidad, 'url' => ['view', 'id' => $model->id_necesidad]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ent-necesidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
