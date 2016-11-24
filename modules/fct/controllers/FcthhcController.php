<?php

namespace app\modules\fct\controllers;

use Yii;
use app\modules\fct\models\Fcthhc;
use app\modules\fct\models\FcthhcSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\fct\models\Fcthhcdetail;
use yii\data\ArrayDataProvider;
use yii\helpers\Url;
/**
 * FcthhcController implements the CRUD actions for Fcthhc model.
 */
class FcthhcController extends Controller
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
     * Lists all Fcthhc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FcthhcSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
public function actionIndexhhc()
    {
        $searchModel = new FcthhcSearch(['status'=>'เยี่ยมแล้ว']);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('indexhhc', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndexfct()
    {
        $searchModel = new FcthhcSearch(['status'=>'ยังไม่เยี่ยม']);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
//        $searchModel2 = new FcthhcSearch(['status'=>'เยี่ยมแล้ว']);
//        $dataProvider2 = $searchModel2->search(Yii::$app->request->queryParams);

        return $this->render('indexfct', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
//            'searchModel2' => $searchModel2,
//            'dataProvider2' => $dataProvider2,
        ]);
    }
    public function actionIndexfctok()
    {
        $searchModel = new FcthhcSearch(['status'=>'เยี่ยมแล้ว']);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('indexfctok', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Fcthhc model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Fcthhc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fcthhc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Fcthhc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);       

        if ($model->load(Yii::$app->request->post())&& $model->save()) {
          
            return $this->redirect(['indexfct']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionUpdatedetail($id)
    {
        $model = $this->findModel($id);
        $fcthhcdel = new Fcthhcdetail;

        if ($model->load(Yii::$app->request->post())) {
            
            $fcthhcdel->fcthhc_id = $model->id;
            $fcthhcdel->fct_id = $model->fct_id;
            $fcthhcdel->fcthosin_id = $model->fcthosin_id;
            
            $fcthhcdel->save();
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('updatedetail', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Fcthhc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Fcthhc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Fcthhc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fcthhc::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
