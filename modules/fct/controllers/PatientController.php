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
    public function actionIndexfct( $cid = null,$hos_guid=null,$birthday=null,$cc=null,$hpi=null,$age_y=null)
    {
       $sql = "select p.hos_guid,v.vn,p.hn,concat(p.pname,p.fname,' ',p.lname)as ptname,p.cid
        ,v.age_y,max(v.vstdate) as vstdate,o.cc,o.hpi,o.bw,o.height,p.drugallergy
        ,p.birthday,p.addressid,p.moopart,p.tmbpart,p.clinic,p.pttype
        ,v.vstdate,p.moopart,p.informaddr,p.hometel,p.tmbpart,p.sex,v.pdx,p.bloodgrp

        from patient p
        left outer join vn_stat v on v.hn=p.hn
        left outer join opdscreen o on o.vn=v.vn
        where p.cid='$cid'
        group by v.vn
        order by v.vstdate desc
        limit 3";
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
            'birthday'=>$birthday,
            'cc'=>$cc,            
            'hpi'=>$hpi,
            'age_y'=>$age_y
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
            $fcthos->address = $model->informaddr;
            $fcthos->disease = $model->clinic;
            $fcthos->drugallergy = $model->drugallergy;
            $fcthos->phone = $model->informtel;
            $fcthos->ptname = $model->patientname;
            $fcthos->pttype = $model->pttype;
            $fcthos->moopart = $model->moopart;
            
            $fcthos->send = '0';
            $fcthos->okcase = '0';            
           
            
            $fcthos->save();
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
    public function actionFctinsert($id,$cc=null,$pi=null,$age_y=null,$sex=null,$hn=null,$diage=null
            ,$height=null,$bw=null,$cid=null,$ptname=null,$address=null,$disease=null,$bloodgrp=null
            ,$pttype=null,$vstdate=null,$moopart=null,$drugallergy=null,$phone=null,$tmbpart=null){
        
        $tofct = new Fct();
        
        $tofct->cc = $cc;
        $tofct->pi = $pi;
        $tofct->age = $age_y;
        $tofct->height = $height;
        $tofct->bw = $bw;
        $tofct->cid = $cid;
        $tofct->ptname = $ptname;
        $tofct->address =$address;
        $tofct->disease  = $disease;
        $tofct->pttype = $pttype;
        $tofct->vstdate = $vstdate;
        $tofct->moopart = $moopart;
        $tofct->drugallergy = $drugallergy;
        $tofct->phone = $phone;
        $tofct->tmbpart = $tmbpart;
        $tofct->sex = $sex;
        $tofct->hn = $hn;
        $tofct->diage = $diage;
        $tofct->bloodgrp = $bloodgrp;
        
        $tofct->send = 0;
        $tofct->okcase = 0;
        
        $tofct->save();
         return $this->redirect(['indexfct']);
       
        
        
// 
       
        
    }
}
