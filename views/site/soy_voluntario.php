<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Sistema de Voluntarios para el Sismo de CDMX 2017 - 2 Geeks one Monkey ®  ';

?>
	
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 offset-md-2 col-sm-12 col-md-8 col-md-offset-2">
			<div class="panel">
				<div class="panel-body">
					<h1>Gracias por participar!</h1>

					<p class="lead">Te pedimos de la manera mas atenta que cuando crees una localidad o reportes uan necesidad , revises la lista (puedes ejecutar una busqueda con los campos de hasta arriba) y no dupliques solicitudes.</p>

					<p><a class="btn btn-lg btn-success" href="<?=  Url::to(['necesidades/index', 'idVol' => $voluntario->id_voluntario, 'idLoc' => $voluntario->id_localidad]); ?>">Solicitar Ayuda</a></p>
					<p><a class="btn btn-lg btn-success" href="<?=  Url::to(['localidad/']); ?>">Agregar una zona de desastre</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
