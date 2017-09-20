<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */

$this->title = 'Create Ent Necesidades';
$this->params['breadcrumbs'][] = ['label' => 'Ent Necesidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-necesidades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
