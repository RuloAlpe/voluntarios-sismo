<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Sistema de Voluntarios para el Sismo de CDMX 2017 - 2 Geeks one Monkey ®  ';

?>

<div class="site-index">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Gracias por participar!</h1>

			    <p class="lead">Te pedimos de la manera mas atenta que cuando crees una localidad o reportes uan necesidad , revises la lista (puedes ejecutar una busqueda con los campos de hasta arriba) y no dupliques solicitudes.</p>

			    <p><a class="btn btn-lg btn-success" href="<?=  Url::to(['necesidades/index', 'idVol' => $voluntario->id_voluntario, 'idLoc' => $voluntario->id_localidad]); ?>">Solicitar Ayuda</a></p>
			    <p><a class="btn btn-lg btn-success" href="<?=  Url::to(['localidad/']); ?>">Agregar una zona de desastre</a></p>
			</div>
		</div>
	</div>
</div>