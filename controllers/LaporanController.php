<?php

namespace app\controllers;

use Yii;
use app\models\SuratMasuk;
use app\models\SuratKeluar;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;
use mPDF;

/**
 * TbAssetController implements the CRUD actions for TbAsset model.
 */
class LaporanController extends Controller
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


 public function actionSuratMasuk()
    {    
       $model = new SuratMasuk();
       $post = Yii::$app->request;

       if ($model->load(Yii::$app->request->post())) {
           $data =Yii::$app->request->post();
           $bul_awal = $data['SuratMasuk']['bulan_awal'];
           $bul_akhir = $data['SuratMasuk']['bulan_akhir'];

           return $this->redirect(['cetak-laporan-smasuk', 'awal' => $bul_awal, 'akhir' => $bul_akhir]);
       }

        return $this->render('laporan-smasuk', [
            'model' => $model,
        ]);
    }

    public function actionCetakLaporanSmasuk()
    {    
       $model = new SuratMasuk();

       $tgl_awal = Yii::$app->getRequest()->getQueryParam('awal');
       $tgl_akhir = Yii::$app->getRequest()->getQueryParam('akhir');

       $data= (new \yii\db\Query());
       $data  
       ->select(['surat_masuk.*']) 
       ->from('surat_masuk')
       ->where('tgl_surat between "'.$tgl_awal.'" AND "'.$tgl_akhir.'" ');
       $command = $data->createCommand();
       $modelSMasuk = $command->queryAll();

       $mpdf = new \Mpdf\Mpdf();
       $mpdf->SetTitle('Laporan Surat Masuk');
       $mpdf->WriteHTML($this->renderPartial('cetak-laporan-smasuk',[
            'model' => $model,
            'modelSMasuk' => $modelSMasuk,
        ]
        ));
        $mpdf->Output('laporan surat masuk.pdf','I');
        exit;
    }

    public function actionSuratKeluar()
    {    
       $model = new SuratMasuk();
       $post = Yii::$app->request;

       if ($model->load(Yii::$app->request->post())) {
           $data =Yii::$app->request->post();
           $bul_awal = $data['SuratMasuk']['bulan_awal'];
           $bul_akhir = $data['SuratMasuk']['bulan_akhir'];

           return $this->redirect(['cetak-laporan-skeluar', 'awal' => $bul_awal, 'akhir' => $bul_akhir]);
       }

        return $this->render('laporan-skeluar', [
            'model' => $model,
        ]);
    }

    public function actionCetakLaporanSkeluar()
    {    
       $model = new SuratKeluar();

       $tgl_awal = Yii::$app->getRequest()->getQueryParam('awal');
       $tgl_akhir = Yii::$app->getRequest()->getQueryParam('akhir');

       $data= (new \yii\db\Query());
       $data  
       ->select(['surat_keluar.*']) 
       ->from('surat_keluar')
       ->where('tgl_surat between "'.$tgl_awal.'" AND "'.$tgl_akhir.'" ');
       $command = $data->createCommand();
       $modelSKeluar = $command->queryAll();

       $mpdf = new \Mpdf\Mpdf();
       $mpdf->SetTitle('Laporan Surat Keluar');
       $mpdf->WriteHTML($this->renderPartial('cetak-laporan-skeluar',[
            'model' => $model,
            'modelSKeluar' => $modelSKeluar,
        ]
        ));
        $mpdf->Output('laporan surat keluar.pdf','I');
        exit;
    }

}
