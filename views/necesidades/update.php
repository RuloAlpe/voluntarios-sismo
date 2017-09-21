<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */

$this->title = 'Actualizar Necesidades: ' . $model->txt_necesidad;
//$this->params['breadcrumbs'][] = ['label' => 'Necesidades', 'url' => ['index', 'idVol'=>$voluntario->id_voluntario, 'idLoc'=>$localidad->id_localidad]];
//$this->params['breadcrumbs'][] = ['label' => $model->id_necesidad, 'url' => ['view', 'id' => $model->id_necesidad]];
//$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel">
                <div class="panel-body">
                    <h1><?= Html::encode($this->title) ?></h1>

                    <?= $this->render('_form', [
                        'model' => $model,
                        'localidad' => $localidad,
                        'voluntario' => $voluntario
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
