<?php

namespace app\controllers;

use Yii;
use app\models\Patient;
use app\models\PatientSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
use app\modules\fct\models\Fct;
/**
 * PatientController implements the CRUD actions for Patient model.
 */
class PatientController extends Controller
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

    public function actionIndex()
    {
        $searchModel = new PatientSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionIndexfct( $cid = null,$hos_guid=null,$birthday=null)
    {
       $sql = "select hos_guid,cid,hn,concat(pname,fname,' ',lname)as ptname,birthday
            ,addressid,moopart,tmbpart,clinic,drugallergy   
            from patient 
            where cid='$cid'";
        $connection = Yii::$app->db2;
        $data = $connection->createCommand($sql)->queryAll();
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$data,                
            ]);
       
        return $this->render('indexfct', [
            //'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'sql' => $sql,    
            'cid'=>$cid,
            'hos_guid'=>$hos_guid,
            'birthday'=>$birthday
        ]);
    }

    /**
     * Displays a single Patient model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Patient();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hos_guid]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

//    public function actionUpdate($cid)
//    {
//        $model = $this->findModel($id);
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//           
//            return $this->redirect(['view', 'id' => $model->hos_guid]);
//        } else {
//            return $this->render('update', [
//                'model' => $model,
//            ]);
//        }
//    }
    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        $fct = new \app\modules\fct\models\Fct;

        if ($model->load(Yii::$app->request->post())) {
            
            $fct->id = $model->hos_guid;
            $fct->hn = $model->hn;
            $fct->cid = $model->cid;
            $fct->drugallergy = $model->drugallergy;
            $fct->phone = $model->hometel;
            $fct->ptage = $model->birthday;
            $fct->address = $model->informaddr;
            $fct->sex = $model->sex;
            $fct->tmbpart = $model->tmbpart;
            $fct->bloodgrp = $model->bloodgrp;
            $fct->send = '0';
            
            
            $fct->save();
            $model->save();
            return $this->redirect(['indexfct',]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

   
    protected function findModel($id)
    {
        if (($model = Patient::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
