<?php
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EntNecesidades */

$this->title = 'Nueva solicitud de:';
$this->params['breadcrumbs'][0] = ['label' => 'Necesidades', 'url' => ['index', 'idVol' => $idVol, 'idLoc' => $idLoc]];
//$this->params['breadcrumbs'][] = $this->title;
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
	

