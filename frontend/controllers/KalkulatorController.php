<?php

namespace frontend\controllers;

use yii\base\DynamicModel;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use Yii;
use yii\helpers\Url;
use common\models\JenisZakat;


class KalkulatorController extends \yii\web\Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $harga_emas = \common\models\JenisZakat::find()->where(['jenisZakatNama' => 'Zakat Emas'])->one();
        $model = new \yii\base\DynamicModel(['emas_dimiliki', 'harga_emas', 'nishab_emas']);
        $model->addRule(['emas_dimiliki', 'harga_emas', 'nishab_emas'], 'number');
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    // do what you want 
            if ($model->emas_dimiliki < 85) {
                Yii::$app->session->setFlash('success', "<strong>Anda Tidak Wajib Membayar Zakat</strong>");
                return $this->redirect(['index']);
            } else {
                $total = $model->emas_dimiliki * $model->harga_emas * 2.5 / 100;
                $totalRp = number_format($total, 2, ',', '.');
                $link = Url::to(['site/bayar-zakat', 'id' => $harga_emas->jenisZakatId, 'total' => $total]);
                Yii::$app->session->setFlash('success', "<strong>Anda Wajib Membayar Zakat</strong> Zakat yang harus anda bayarkan Rp" . $totalRp . "<a href='" . $link . "' class='btn btn-success' style=' color : white;
                width : auto;
                border : none'>Tunaikan Sekarang</a>");
                return $this->redirect(['index']);
            }

        }
        return $this->render('index', ['model' => $model, 'harga' => $harga_emas]);
    }



    public function actionFitrah()
    {
        $model = JenisZakat::find()->where(['jenisZakatId' => 3])->one();
        $total = $model->jenisZakatNisab * 3.5;
        $totalRp = number_format($total, 2, ',', '.');
        $link = Url::to(['site/bayar-zakat', 'id' => $model->jenisZakatId, 'total' => $total]);
        $data = [
            'model' => $model,
            'total' => $totalRp,
            'link' => $link
        ];
        return $this->render('fitrah', ['data' => $data]);
    }

    public function actionPertanian()
    {
        $model = JenisZakat::find()->where(['jenisZakatId' => 2])->one();
        if ($data = Yii::$app->request->post()) {
            if ($data['pendapatan'] < $model->jenisZakatNisab) {
                Yii::$app->session->setFlash('success', "<strong>Anda Tidak Wajib Membayar Zakat</strong>");
                return $this->redirect(['pertanian']);
            } else {
                if ($data['metod'] == 'buatan') {
                    $total = $data['pendapatan'] * 0.05;
                } else {
                    $total = $data['pendapatan'] * 0.1;
                }
                $totalRp = number_format($total, 2, ',', '.');
                $link = Url::to(['site/bayar-zakat', 'id' => $model->jenisZakatId, 'total' => $total]);
                Yii::$app->session->setFlash('success', "<strong>Anda Wajib Membayar Zakat</strong> Zakat yang harus anda bayarkan Rp" . $totalRp . "<a href='" . $link . "' class='btn btn-success' style=' color : white;
                width : auto;
                border : none'>Tunaikan Sekarang</a>");
                return $this->redirect(['pertanian']);
            }

        }
        return $this->render('pertanian');
    }

    public function actionPeternakan()
    {
        if ($data = Yii::$app->request->post()) {
            $bayar_kambing = 0;
            $bayar_sapi = "";

            if ($data['kambing'] < 40) {
                $bayar_kambing = 0;
            } else if ($data['kambing'] >= 40 && $data['kambing'] <= 120) {
                $bayar_kambing = 1;
            } else if ($data['kambing'] >= 121 && $data['kambing'] <= 200) {
                $bayar_kambing = 2;
            } else if ($data['kambing'] >= 201 && $data['kambing'] <= 300) {
                $bayar_kambing = 3;
            } else if ($data['kambing'] > 300) {
                // 2 ekor sapi betina atau jantan umur 1 tahun
                $data2 = $data['kambing'] - 300;
                $tamb_bayar = $data2 / 100;
                $bayar_kambing = 3 + $tamb_bayar;
            }
            if ($data['sapi'] < 30) {
                $bayar_sapi = "tidak bayar zakat sapi/kerbau/kuda";
            } else if ($data['sapi'] >= 30 && $data['sapi'] <= 39) {
                $bayar_sapi = "1 ekor sapi betina atau jantan umur 1 tahun";
            } else if ($data['sapi'] >= 40 && $data['sapi'] <= 59) {
                $bayar_sapi = "1 ekor sapi betina atau jantan umur 2 tahun";
            } else if ($data['sapi'] >= 60 && $data['sapi'] <= 69) {
                $bayar_sapi = "2 ekor sapi betina atau jantan umur 1 tahun";
            } else if ($data['sapi'] >= 70 && $data['sapi'] <= 79) {
                $bayar_sapi = "2 ekor sapi betina atau jantan umur 1 tahun";
            }

            if ($bayar_kambing == 0) {
                $zakat_kambing = "tidak membayar zakat kambing/domba/biri-biri";
            } else {
                $zakat_kambing = $bayar_kambing . " kambing";
            }

            $zakat_sapi = $bayar_sapi;
            $zakat = $zakat_kambing . ", " . $zakat_sapi;

            Yii::$app->session->setFlash('success', $zakat);
            return $this->redirect(['peternakan']);
        }
        return $this->render('peternakan');
    }

    public function actionRikaz()
    {
        $model = JenisZakat::find()->where(['jenisZakatId' => 4])->one();
        if ($data = Yii::$app->request->post()) {
            $total = $data['rikaz'] * 0.2;
            $totalRp = number_format($total, 2, ',', '.');
            $link = Url::to(['site/bayar-zakat', 'id' => $model->jenisZakatId, 'total' => $total]);
            Yii::$app->session->setFlash('success', "<strong>Anda Wajib Membayar Zakat</strong> Zakat yang harus anda bayarkan Rp" . $totalRp . "<a href='" . $link . "' class='btn btn-success' style=' color : white;
            width : auto;
            border : none'>Tunaikan Sekarang</a>");
        }
        return $this->render('rikaz');
    }

}
