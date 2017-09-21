<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 offset-md-3 col-sm-12 col-md-6 col-md-offset-3">

            <div class="panel">
                <div class="panel-body">
                <h1>Voluntarios sismo CDMX 2017</h1>

                <p class="lead">Gracias por participar y colaborar a través del sistema de voluntariado para el sismo de CDMX, <span class="text-warning"> porfavor de la manera más atenta te pedimos utilizes esta aplicación web con mesura y responsabilidad evitando duplicar información y creando información falsa </span>
                </p>
                <div class="text-center">
                    <p><a class="btn btn-lg btn-success" href="<?=  Url::to(['voluntario/create']); ?>">Quiero ser voluntario</a></p>
                    <p><a id="btn-soy-voluntario" class="btn btn-lg btn-warning" href="#">Soy voluntario</a></p>
                </div>

                <div id="login">
                    <div class="row">
                        <div class="login-container">

                        </div>
                    </div>  
                </div>

                <?php
                if($errorLogin){
                    ?>
                    <div class="alert alert-danger" role="alert">
                        No existe en la base de datos el email ingresado
                    </div>
                <?php
                }
                ?>

                </div>
            </div>    
            </div>
        </div>

       
    </div>    

<script>

var isOpen = false;

$('#btn-soy-voluntario').on('click', function(){

    if (!isOpen) {
        $('#login .login-container').append("<form action='<?=  Url::to(['site/soy-voluntario']); ?>' method='POST'><div class='form-group col-md-12'>"+
        "<input type='text' name='email' class='form-control' placeholder='Usa el mail con el que te registrarse en quiero ser voluntario'>"+
        "</div>"+
        "<div class='col-md-12 text-center'><input type='submit' class='btn btn-primary' value='Entrar'></div></form>"
    );
        self.isOpen = true
    };

    
});
</script>