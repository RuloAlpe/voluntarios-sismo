<?php

namespace app\controllers;

use Yii;
use app\models\EntNecesidades;
use app\models\NecesidadesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\EntLocalidades;
use app\models\EntVoluntario;

/**
 * NecesidadesController implements the CRUD actions for EntNecesidades model.
 */
class NecesidadesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all EntNecesidades models.
     * @return mixed
     */
    public function actionIndex($idVol, $idLoc)
    {
        $lugar = EntLocalidades::find()->where(["id_localidad"=>$idLoc])->one();
        $searchModel = new NecesidadesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams,$idLoc);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'idLoc' => $idLoc,
            'idVol' => $idVol,
            'lugar'=>$lugar
        ]);
    }

    /**
     * Displays a single EntNecesidades model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $localidad = EntLocalidades::find()->where(['id_localidad'=>$model->id_localidad])->one();
        $voluntario = EntVoluntario::find()->where(['id_voluntario'=>$model->id_voluntario])->one();

        return $this->render('view', [
            'model' => $model,
            'localidad' => $localidad,
            'voluntario' => $voluntario
        ]);
    }

    /**
     * Creates a new EntNecesidades model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($idVol, $idLoc)
    {
        $model = new EntNecesidades();
        $localidad = EntLocalidades::find()->where(['id_localidad'=>$idLoc])->one();
        $voluntario = EntVoluntario::find()->where(['id_voluntario'=>$idVol])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'idVol' => $model->id_voluntario, 'idLoc' => $model->id_localidad]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'idVol' => $idVol, 
                'idLoc' => $idLoc,
                'localidad' => $localidad,
                'voluntario' => $voluntario
            ]);
        }
    }

    /**
     * Updates an existing EntNecesidades model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $localidad = EntLocalidades::find()->where(['id_localidad'=>$model->id_localidad])->one();
        $voluntario = EntVoluntario::find()->where(['id_voluntario'=>$model->id_voluntario])->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'idVol' => $model->id_voluntario, 'idLoc' => $model->id_localidad]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'localidad' => $localidad,
                'voluntario' => $voluntario
            ]);
        }
    }

    /**
     * Deletes an existing EntNecesidades model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Finds the EntNecesidades model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return EntNecesidades the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EntNecesidades::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
