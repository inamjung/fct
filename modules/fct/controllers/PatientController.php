<?php

namespace app\modules\fct\controllers;

use Yii;
use app\modules\fct\models\Patient;
use app\modules\fct\models\PatientSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\modules\fct\models\Fct;
use yii\data\ArrayDataProvider;
use yii\helpers\Url;

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

    /**
     * Lists all Patient models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PatientSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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

    /**
     * Creates a new Patient model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
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

    /**
     * Updates an existing Patient model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
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
    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $fcthos = new Fct;
        if ($model->load(Yii::$app->request->post())) {
            
            $fcthos->cid = $model->cid;
            $fcthos->hn = $model->hn;
            $fcthos->birthday = $model->birthday;
            $fcthos->sex = $model->sex;
            $fcthos->bloodgrp = $model->bloodgrp;
            $fcthos->tmbpart = $model->tmbpart;
            $fcthos->address = $model->patientaddr;
            $fcthos->address = $model->informaddr;
            $fcthos->ptname = $model->patientname;
            $fcthos->send = '0';
            $fcthos->okcase = '0';
            
           //$fcthos->phone = $model->informtel;
            
            $fcthos->save();
            $model->save();
            return $this->redirect(['indexfct',]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Patient model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Patient model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Patient the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Patient::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}