<?php

namespace frontend\controllers;

use app\models\Datakaryawan;
use app\models\DatakaryawanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DatakaryawanController implements the CRUD actions for Datakaryawan model.
 */
class DatakaryawanController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Datakaryawan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DatakaryawanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Datakaryawan model.
     * @param int $idkaryawan Idkaryawan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idkaryawan)
    {
        return $this->render('view', [
            'model' => $this->findModel($idkaryawan),
        ]);
    }

    /**
     * Creates a new Datakaryawan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Datakaryawan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idkaryawan' => $model->idkaryawan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Datakaryawan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idkaryawan Idkaryawan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idkaryawan)
    {
        $model = $this->findModel($idkaryawan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idkaryawan' => $model->idkaryawan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Datakaryawan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idkaryawan Idkaryawan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idkaryawan)
    {
        $this->findModel($idkaryawan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Datakaryawan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idkaryawan Idkaryawan
     * @return Datakaryawan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idkaryawan)
    {
        if (($model = Datakaryawan::findOne(['idkaryawan' => $idkaryawan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
