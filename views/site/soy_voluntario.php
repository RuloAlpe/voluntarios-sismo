<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>

<div class="site-index">
<div class="jumbotron">
    <h1>Congratulations!</h1>

    <p class="lead">You have successfully created your Yii-powered application.</p>
    <p><a class="btn btn-lg btn-success" href="<?=  Url::to(['necesidades/index', 'idVol' => $voluntario->id_voluntario, 'idLoc' => $voluntario->id_localidad]); ?>">Pedir necesidades</a></p>
    <p><a class="btn btn-lg btn-success" href="<?=  Url::to(['localidad/']); ?>">Agregar localidad</a></p>
</div>
</div>