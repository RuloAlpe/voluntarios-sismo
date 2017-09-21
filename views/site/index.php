<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use app\models\EntLocalidades;
use yii\helpers\ArrayHelper;
use app\models\Calendario;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 offset-md-2 col-sm-12 col-md-8 col-md-offset-2">
              <div class="panel-group" id="accordion">
                <div class="panel">
                  <div class="panel-heading  panel-custom">
                    <h2 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        ¿Quieres ayudar? Da click aquí
                      </a>
                    </h2>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <h1>
                        Voluntarios sismo CDMX 2017
                      </h1>
      
                      <p class="lead">Gracias por participar y colaborar a través del sistema de voluntariado para el sismo de CDMX, <span class="text-warning"> porfavor de la manera más atenta te pedimos utilizes esta aplicación web con mesura y responsabilidad evitando duplicar información y creando información falsa </span>
                      </p>
                      <div class="text-center">
                          <p><a class="btn btn-lg btn-success" href="<?= Url::to(['voluntario/create']); ?>">Quiero ser voluntario</a></p>
                          <p><a id="btn-soy-voluntario" class="btn btn-lg btn-warning" href="#">Soy voluntario</a></p>
                      </div>
      
                      <div id="login">
                          <div class="row">
                              <div class="login-container">
      
                              </div>
                          </div>  
                      </div>
      
                      <?php
                      if ($errorLogin) {
                        ?>
                          <div class="alert alert-danger" role="alert">
                              No existe en la base de datos el email ingresado
                          </div>
                      <?php

                    }
                    ?></div>
    </div>
  </div>
  <div class="panel">
    <div class="panel-heading  panel-custom-2">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        ¿Que se esta solicitando?</a>
      </h2>
    </div>
    <div id="collapse2" class="panel-collapse collapse  in">
      <div class="panel-body">
       
            <div class="row">
                <div class="col-md-12">
                <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-hover'],
                'options' => ['class' => 'table-responsive'],
                'columns' => [
                    [
                        'label' => 'Fecha solicitud',
                        'filter'=>'',
                        'attribute' => 'fch_creacion',
                        'format' => 'raw',
                        'value' => function ($model) {
                            $fecha = Calendario::getDateComplete($model->fch_creacion);    
                            $hora = Calendario::getHoursMinutes($model->fch_creacion);  
                            return  $fecha. " " .$hora ;
                        },
                    ],
                    [
                      'label' => 'Lugar',
                      'filter'=>ArrayHelper::map(EntLocalidades::find()->asArray()->all(), 'id_localidad', 'txt_nombre'),
                      'format' => 'raw',
                      'value' => function ($model) {
                            
                          return  $model->idLocalidad->txt_nombre ;
                      },
                      'attribute' => 'id_localidad',
                    ],
                    [
                        'label' => 'Requerimiento',
                        'attribute' => 'txt_necesidad',
                    ],
                    [
                        'label' => 'Cantidad',
                        'attribute' => 'num_elementos',
                    ],
                ],
            ]); ?>
                </div>     
            </div>


      </div>
    </div>
  </div>
  
</div>
                
            </div>
        </div>   
    </div>

<script>

var isOpen = false;

$('#btn-soy-voluntario').on('click', function(){

    if (!isOpen) {
        $('#login .login-container').append("<form action='<?= Url::to(['site/soy-voluntario']); ?>' method='POST'><div class='form-group col-md-12'>"+
        "<input type='text' name='email' class='form-control' placeholder='Usa el mail con el que te registrarse en quiero ser voluntario'>"+
        "</div>"+
        "<div class='col-md-12 text-center'><input type='submit' class='btn btn-primary' value='Entrar'></div></form>"
    );
        self.isOpen = true
    };

    
});
</script>