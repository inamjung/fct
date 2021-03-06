<?php

namespace app\modules\fct\controllers;

use Yii;
use app\modules\fct\models\Fct;
use app\modules\fct\models\FctSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\fct\models\Fcthhc;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
/**
 * FctController implements the CRUD actions for Fct model.
 */
class FctController extends Controller
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
     * Lists all Fct models.
     * @return mixed
     */
    public function actionTabsData() {
    $html = $this->renderPartial('tabContent');
    return Json::encode($html);
}

    public function actionMe()
    {
        $model = new FctSearch();
        $dataProvider = $model->search(Yii::$app->request->queryParams);
       return $this->render('tab', [
                    'model' => $model,
//                    'active' => $active
        ]);
    }
    public function actionIndex()
    {
        $searchModel = new FctSearch();
        $searchModel-> send=0;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
     public function actionIndexall()
    {
        $searchModel = new FctSearch();        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('indexall', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
   
    public function actionIndexcase()
    {
        $searchModel = new FctSearch(['okcase'=>'0']);
        //$searchModel-> okcase='0';
        $searchModel-> send=1;
        $searchModel->hosin = Yii::$app->user->identity->fcthosin_id;
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
       

        return $this->render('indexcase', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,            
        ]);
    }
    public function actionIndexcaseok()
    {
        $searchModel = new FctSearch(['okcase'=>1]);
        $searchModel-> send=1;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('indexcaseok', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    /**
     * Displays a single Fct model.
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
     * Creates a new Fct model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Fct();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Fct model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
//    public function actionUpdate($id)
//    {
//        $model = $this->findModel($id);
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        } else {
//            return $this->renderAjax('update', [
//                'model' => $model,
//            ]);
//        }
//    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionUpdatecase($id)
    {
        $model = $this->findModel($id);
        $fcthc = new Fcthhc();

        if ($model->load(Yii::$app->request->post())) {
            $fcthc->fct_id = $model->id;
            $fcthc->cid = $model->cid;
            $fcthc->fcthosin_id = $model->hosin;
           
            
            
            $fcthc->save();                    
            $model->save();
            return $this->redirect(['indexcase']);
        } else {
            return $this->render('updatecase', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Deletes an existing Fct model.
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
     * Finds the Fct model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Fct the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Fct::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
