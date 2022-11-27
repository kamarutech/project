<?php

namespace backend\controllers;

use app\models\Blog;
use app\models\BlogSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
/**
 * BlogiController implements the CRUD actions for Blog model.
 */
class BlogiController extends Controller
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
     * Lists all Blog models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Blog model.
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
     * Creates a new Blog model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {        $model = new Blog();

        if (Yii::$app->request->isPost) {
            // ambil foto
            $model->fotoblog = UploadedFile::getInstance($model, 'fotoblog');
            
             $model->path = '../../frontend/web/site/' . $model->fotoblog->baseName.$model->fotoblog->extension;
             $model->dateblog='mohon tambah date';
             $model->judulblog='mohon tambah judul';
             $model->textblog='mohon tambah text'

             
             ;
            

            if ($model->save())
            
            {
                // upload foto
                $model->fotoblog->saveAs('../../frontend/web/site/' . $model->fotoblog->baseName . '.' . $model->fotoblog->extension);
                 
                // return 'berhasil mengupload ' . $model->fotohighlight->name;
                return $this->redirect(['view', 'ID' => $model->ID]);
            }else {
                return 'gagal mengupload ' . $model->fotoblog->name;
            }
                       
        }
     

        return $this->render('create', ['model'=>$model]);
    }
    /**
     * Updates an existing Blog model.
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
     * Deletes an existing Blog model.
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
     * Finds the Blog model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ID ID
     * @return Blog the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID)
    {
        if (($model = Blog::findOne(['ID' => $ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
