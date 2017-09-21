<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntLocalidades */

$this->title = 'Agregar una nueva zona de desastre';
$this->params['breadcrumbs'][] = ['label' => 'Listado de Zonas', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ent-localidades-create">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1><?= Html::encode($this->title) ?></h1>

			    <?= $this->render('_form', [
			        'model' => $model,
			    ]) ?>
			</div>
		</div>
	</div>
    

</div>
