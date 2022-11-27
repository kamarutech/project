<?php

namespace backend\controllers;

use app\models\Fotobackground;
use app\models\FotobackgroundSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
/**
 * GaleriiController implements the CRUD actions for Foto model.
 */
class FotobackgroundController extends Controller
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
     * Lists all Galeri models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new FotobackgroundSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Galeri model.
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
     * Creates a new Galeri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()


    {        $model = new Fotobackground();

        if (Yii::$app->request->isPost) {
            // ambil foto
            $model->foto = UploadedFile::getInstance($model, 'foto');
            
             $model->path = '../../frontend/web/site/' . $model->foto->baseName.$model->foto->extension;
        
             
             ;
            

            if ($model->save())
            
            {
                // upload foto
                $model->foto->saveAs('../../frontend/web/site/' . $model->foto->baseName . '.' . $model->foto->extension);
                 
                return 'berhasil mengupload ' . $model->foto->name;
            }else {
                return 'gagal mengupload ' . $model->foto->name;
            }
                       
        }
        $model->save();

        return $this->render('create', ['model'=>$model]);
    }


    // {
    //     $model = new Galeri();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'ID' => $model->ID]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Updates an existing Galeri model.
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
     * Deletes an existing Galeri model.
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
     * Finds the Galeri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID ID
     * @return Fotobackground the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID)
    {
        if (($model = Fotobackground::findOne(['ID' => $ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
