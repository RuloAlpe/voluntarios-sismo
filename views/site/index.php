<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
    
<div class="site-index">
    <div class="jumbotron">
        <h1>Sistema de voluntario</h1>

        <p class="lead">Bienvenido al sistema de voluntarios del sismo en México.</p>
        <p><a class="btn btn-lg btn-success" href="<?=  Url::to(['voluntario/create']); ?>">Quiero ser voluntario</a></p>
        <p><a class="btn btn-lg btn-success" href="<?=  Url::to(['site/soy-voluntario']); ?>">Soy voluntario</a></p>
    </div>
</div>
