<?php

namespace backend\controllers;

use Yii;
use common\models\PembayaranZakat;
use common\models\PembayaranZakatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\auth\Auth;
use yii\web\UploadedFile;

/**
 * PembayaranZakatController implements the CRUD actions for PembayaranZakat model.
 */
class PembayaranZakatController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return Auth::behaviors([
            'deny' => function ($rule, $action) {
                $this->redirect(['site/login']);
            },
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Lists all PembayaranZakat models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = Auth::getRole();
        $searchModel = new PembayaranZakatSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PembayaranZakat model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this->layout = Auth::getRole();
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PembayaranZakat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = Auth::getRole();
        $model = new PembayaranZakat();

        if ($data = Yii::$app->request->post()) {
            $model->pembayaranZakatBukti = UploadedFile::getInstance($model, 'pembayaranZakatBukti');
            $data['PembayaranZakat']['pembayaranZakatBukti'] = $model->pembayaranZakatBukti;
            if ($model->load($data)) {
                
                $model->pembayaranZakatTgl = date("Y-m-d");
                $model->save(false);
                $model->pembayaranZakatBukti->saveAs(Yii::$app->basePath . "/web/foto/" . $model->pembayaranZakatBukti->name);
            }
           
            return $this->redirect(['view', 'id' => $model->pembayaranZakatId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PembayaranZakat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->layout = Auth::getRole();
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pembayaranZakatId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PembayaranZakat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PembayaranZakat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PembayaranZakat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PembayaranZakat::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
