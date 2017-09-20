<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntVoluntario */

$this->title = 'Update Ent Voluntario: ' . $model->id_voluntario;
$this->params['breadcrumbs'][] = ['label' => 'Ent Voluntarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_voluntario, 'url' => ['view', 'id' => $model->id_voluntario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ent-voluntario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
