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
        <p><a id="btn-soy-voluntario" class="btn btn-lg btn-success" href="#">Soy voluntario</a></p>
        
    </div>
</div>

<script>
$('#btn-soy-voluntario').on('click', function(){
    $('.jumbotron').append("<form action='<?=  Url::to(['site/soy-voluntario']); ?>' method='POST'><div class='form-group .col-md-6 .offset-md-3'>"+
        "<input type='text' name='email' class='form-control' placeholder='Introducir email'>"+
        "</div>"+
        "<input type='submit' class='btn btn-primary' value='Entrar'></form>"
    );
});
</script>