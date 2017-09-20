<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntVoluntario */

$this->title = 'Crear Voluntario';
//$this->params['breadcrumbs'][] = ['label' => 'Voluntarios', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-voluntario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
