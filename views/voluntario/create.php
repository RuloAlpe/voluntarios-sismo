<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntVoluntario */

$this->title = 'Registrarme como voluntario';
//$this->params['breadcrumbs'][] = ['label' => 'Voluntarios', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
	<div class="row col-sm-12">
		<div class="ent-voluntario-create">

		    <h1><?= Html::encode($this->title) ?></h1>
		    <h5>Para poderte voluntariar en este sistema porfavor selecciona la zona de desastre en la que te encuentras</h5>

		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>

		</div>

	</div>
</div>

