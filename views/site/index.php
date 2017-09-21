<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
    
<div class="site-index">

    <div class="container">
        <div id="loginButtons" class="row">
            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-12">
            <h1>Voluntarios sismo CDMX 2017</h1>

            <p class="lead">Gracias por participar y colaborar a través del sistema de voluntariado para el sismo de CDMX, <span class="text-warning"> porfavor de la manera más atenta te pedimos utilizes esta aplicación web con mesura y responsabilidad evitando duplicar información y creando información falsa </span>
            </p>
            <p><a class="btn btn-lg btn-success" href="<?=  Url::to(['voluntario/create']); ?>">Quiero ser voluntario</a></p>
            <p><a id="btn-soy-voluntario" class="btn btn-lg btn-warning" href="#">Soy voluntario</a></p>
            </div>
        </div>
    </div>    

</div>

<script>

var isOpen = false;

$('#btn-soy-voluntario').on('click', function(){

    if (!isOpen) {
        $('#loginButtons').append("<form action='<?=  Url::to(['site/soy-voluntario']); ?>' method='POST'><div class='form-group .col-md-6 .offset-md-3'>"+
        "<input type='text' name='email' class='form-control' placeholder='Usa el mail con el que te registrarse en quiero ser voluntario'>"+
        "</div>"+
        "<input type='submit' class='btn btn-primary' value='Entrar'></form>"
    );
        self.isOpen = true
    };

    
});
</script>