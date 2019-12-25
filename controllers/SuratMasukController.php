<?php

namespace app\controllers;

use Yii;
use app\models\SuratMasuk;
use app\models\SuratMasukSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;
use yii\web\UploadedFile;

/**
 * SuratMasukController implements the CRUD actions for SuratMasuk model.
 */
class SuratMasukController extends Controller
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
                    'delete' => ['post'],
                    'bulk-delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all SuratMasuk models.
     * @return mixed
     */
    public function actionIndex()
    {    
        $searchModel = new SuratMasukSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single SuratMasuk model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        $request = Yii::$app->request;
        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                    'title'=> "SuratMasuk #".$id,
                    'content'=>$this->renderAjax('view', [
                        'model' => $this->findModel($id),
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','id'=>$id],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
        }else{
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }

    /**
     * Creates a new SuratMasuk model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new SuratMasuk();  

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Tambah Surat Masuk",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }else if($model->load($request->post())){
                $model->lampiran1 = UploadedFile::getInstance($model,'lampiran1');
                $model->lampiran2 = UploadedFile::getInstance($model,'lampiran2');
                $model->lampiran3 = UploadedFile::getInstance($model,'lampiran3');
                $model->lampiran4 = UploadedFile::getInstance($model,'lampiran4');
                if($model->lampiran1){
                    $file = $model->lampiran1->name;
                    if ($model->lampiran1->saveAs('UploadedFile/'.$file) ){
                        $model->lampiran1 = $file;           
                    }
                }
                if($model->lampiran2){
                    $file2 = $model->lampiran2->name;
                    if ($model->lampiran2->saveAs('UploadedFile/'.$file2) ){
                        $model->lampiran2 = $file2;           
                    }
                }
                if($model->lampiran3){
                    $file3 = $model->lampiran3->name;
                    if ($model->lampiran3->saveAs('UploadedFile/'.$file3) ){
                        $model->lampiran3 = $file3;           
                    }
                }
                if($model->lampiran4){
                    $file4 = $model->lampiran4->name;
                    if ($model->lampiran4->saveAs('UploadedFile/'.$file4) ){
                        $model->lampiran4 = $file4;           
                    }
                }
                $model->save(false);
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Tambah Surat Masuk",
                    'content'=>'<span class="text-success">Berhasil</span>',
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Tambah Lagi',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
        
                ];         
            }else{           
                return [
                    'title'=> "Create new SuratMasuk",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
       
    }

    /**
     * Updates an existing SuratMasuk model.
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($id);       
        $old_file1 = $model->lampiran1;       
        $old_file1 = $model->lampiran2;       
        $old_file1 = $model->lampiran3;       
        $old_file1 = $model->lampiran4;       

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Update Surat Masuk #".$id,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];         
            }else if($model->load($request->post())){
                $model->lampiran1 = UploadedFile::getInstance($model,'lampiran1');
                $model->lampiran2 = UploadedFile::getInstance($model,'lampiran2');
                $model->lampiran3 = UploadedFile::getInstance($model,'lampiran3');
                $model->lampiran4 = UploadedFile::getInstance($model,'lampiran4');
                if($model->lampiran1){
                    $file1 = $model->lampiran1->name;
                    if ($model->lampiran1->saveAs('UploadedFile/'.$file1)){
                        $model->lampiran1 = $file1;           
                    }
                }
                if (empty($model->lampiran1)){
                     $model->lampiran1 = $old_file1;
                }

                if($model->lampiran2){
                    $file2 = $model->lampiran2->name;
                    if ($model->lampiran2->saveAs('UploadedFile/'.$file2)){
                        $model->lampiran2 = $file2;           
                    }
                }
                if (empty($model->lampiran2)){
                     $model->lampiran2 = $old_file2;
                }

                if($model->lampiran3){
                    $file3 = $model->lampiran3->name;
                    if ($model->lampiran3->saveAs('UploadedFile/'.$file3)){
                        $model->lampiran3 = $file3;           
                    }
                }
                if (empty($model->lampiran3)){
                     $model->lampiran3 = $old_file3;
                }

                if($model->lampiran4){
                    $file4 = $model->lampiran4->name;
                    if ($model->lampiran4->saveAs('UploadedFile/'.$file4)){
                        $model->lampiran4 = $file4;           
                    }
                }
                if (empty($model->lampiran4)){
                     $model->lampiran4 = $old_file4;
                }

                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "SuratMasuk #".$id,
                    'content'=>$this->renderAjax('view', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','id'=>$id],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
            }else{
                 return [
                    'title'=> "Update SuratMasuk #".$id,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];        
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Delete an existing SuratMasuk model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $request = Yii::$app->request;
        $this->findModel($id)->delete();

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }


    }

     /**
     * Delete multiple existing SuratMasuk model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionBulkDelete()
    {        
        $request = Yii::$app->request;
        $pks = explode(',', $request->post( 'pks' )); // Array or selected records primary keys
        foreach ( $pks as $pk ) {
            $model = $this->findModel($pk);
            $model->delete();
        }

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
       
    }

    /**
     * Finds the SuratMasuk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SuratMasuk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SuratMasuk::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}