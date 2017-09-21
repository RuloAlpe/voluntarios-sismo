<?php
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Calendario;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NecesidadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Que se requiere';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel">
                <div class="panel-body">
                <h1><?= Html::encode($this->title) ?></h1>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            
            <h5>
                Revisa que la solicitud para la localidad que seleccionaste no exista ya en el listado para evitar duplicidad de datos.
            </h5>
            <p>
                <?= Html::a('Crear una nueva solicitud', ['create', 'idVol' => $idVol, 'idLoc' => $idLoc], ['class' => 'btn btn-warning']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-hover'],
                'options' => ['class' => 'table-responsive'],
                'columns' => [
                    [
                        'label' => 'Fecha solicitud',
                        'attribute' => 'fch_creacion',
                        'format' => 'raw',
                        'value' => function ($model) {
                            $fecha = Calendario::getDateComplete($model->fch_creacion);    
                            $hora = Calendario::getHoursMinutes($model->fch_creacion);  
                            return  $fecha. " " .$hora ;
                        },
                    ],
                    [
                        'label' => 'Requerimiento',
                        'attribute' => 'txt_necesidad',
                    ],
                    [
                        'label' => 'Cantidad',
                        'attribute' => 'num_elementos',
                    ],


                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{update} {delete}',
                        'buttons' => [
                            'delete' => function ($url, $model) {
                                return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id_necesidad], [
                                    'class' => '',
                                    'data' => [
                                        'confirm' => '¿Estas seguro que quieres eliminar este elemento?',
                                        'method' => 'post',
                                    ],
                                ]);
                            }
                        ]
                    ],
                ],
            ]); ?>
                </div>
            </div>
        </div>    
    </div>
</div>    
            

      

