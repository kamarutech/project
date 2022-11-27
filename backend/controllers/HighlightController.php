<?php

namespace backend\controllers;

use app\models\Highlight;
use app\models\HighlightSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
/**
 * HighlightController implements the CRUD actions for Highlight model.
 */
class HighlightController extends Controller
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

                'access'=>[
                    'class' =>AccessControl::className(),
                    'rules'=>[
                        [
'actions' => ['login','error'],
'allow'=>true
                        ],
                        [
                        'actions' => ['logout','create','update','delete','view','index'],
'allow'=>true,'roles'=>['@']
                        ]

                        ]
                    ]
                ]
            
        );
    }
    /**
     * Lists all Highlight models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HighlightSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Highlight model.
     * @param int $ID ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID),
        ]);
    }

    /**
     * Creates a new Highlight model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {        $model = new Highlight();

        if (Yii::$app->request->isPost) {
            // ambil foto
            $model->fotohighlight = UploadedFile::getInstance($model, 'fotohighlight');
            
             $model->path = '../../frontend/web/site/' . $model->fotohighlight->baseName.$model->fotohighlight->extension;
             $model->namaproduk='mohon tambah nama'

             
             ;
            

            if ($model->save())
            
            {
                // upload foto
                $model->fotohighlight->saveAs('../../frontend/web/site/' . $model->fotohighlight->baseName . '.' . $model->fotohighlight->extension);
                 
                // return 'berhasil mengupload ' . $model->fotohighlight->name;
                return $this->redirect(['view', 'ID' => $model->ID]);
            }else {
                return 'gagal mengupload ' . $model->fotohighlight->name;
            }
                       
        }
     

        return $this->render('create', ['model'=>$model]);
    }
    /**
     * Updates an existing Highlight model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ID ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ID)
    {
        $model = $this->findModel($ID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Highlight model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ID ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ID)
    {
        $this->findModel($ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Highlight model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID ID
     * @return Highlight the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID)
    {
        if (($model = Highlight::findOne(['ID' => $ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
