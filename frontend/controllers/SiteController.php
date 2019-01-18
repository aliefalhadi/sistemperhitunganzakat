<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\JenisZakat;
use common\models\MetodePembayaran;
use common\models\ZakatNonmember;
use yii\helpers\Url;
use common\models\PembayaranZakat;
use common\models\User;
// use app\models\User;
use yii\web\UploadedFile;
use common\models\InfoProgram;

/**
 * Site controller
 */
class SiteController extends Controller
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

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $data = InfoProgram::find()->all();
        return $this->render('index', ['data' => $data]);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionRegister()
    {
        $model = new User();
        if ($data = Yii::$app->request->post()) {
            $model->foto = UploadedFile::getInstance($model, 'foto');
            $data['User']['foto'] = $model->foto;
            if ($model->load($data)) {
                $model->tanggal_pendaftaran = date('Y-m-d');
                $model->role = 'pengguna';
                $model->status = 'aktif';
                if ($model->save()) {
                    $model->foto->saveAs(Yii::$app->basePath . "/web/foto/" . $model->foto->name);
                    $model2 = new LoginForm();
                    $model2->username = $model->username;
                    $model2->password = $model->password;
                    $model2->login();

                    return $this->redirect(['index']);
                }

            }
        }
        return $this->render('register', ['model' => $model]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
       
        // var_dump(Url::previous());
        // exit();
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // return $this->goBack();
            $a = Url::previous();
            if (isset($a)) {
                return $this->redirect(Url::previous());
            }
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionKalkulator()
    {
        return $this->render('kalkulator');
    }

    public function actionDaftarPembayaran($id, $total)
    {
        $zakat = JenisZakat::find($id)->one();
        $model = new \yii\base\DynamicModel(['nama', 'email', 'noHp', 'alamat']);
        $model->addRule(['nama', 'alamat', 'noHp'], 'string');
        $model->addRule(['email'], 'email');
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $data = [
                'nama' => $model->nama,
                'email' => $model->email,
                'noHp' => $model->noHp,
                'alamat' => $model->alamat
            ];
            $cookies = Yii::$app->response->cookies;

            $cookies->add(new \yii\web\Cookie([
                'name' => 'nama',
                'value' => $model->nama
            ]));
            $cookies->add(new \yii\web\Cookie([
                'name' => 'daftar',
                'value' => $data
            ]));
            // $cookies->add(new \yii\web\Cookie([
            //     'name' => 'noHp',
            //     'value' => $model->noHp
            // ]));
            // $cookies->add(new \yii\web\Cookie([
            //     'name' => 'alamat',
            //     'value' => $model->alamat
            // ]));
            return $this->redirect(['site/bayar-zakat2', 'id' => $id, 'total' => $total]);
        }
        return $this->render('daftar-pembayaran', ['zakat' => $zakat, 'total' => $total, 'model' => $model]);
    }

    public function actionPembayaran()
    {
        if ($data = Yii::$app->request->post()) {
            // var_dump($data);
            $daftar = new PembayaranZakat();

            $daftar->pembayaranZakatUserId = $data['user'];
            $daftar->pembayaranZakatJenisZakatId = $data['zakat'];
            $daftar->pembayaranZakatPegawaiId = '1';
            $daftar->pembayaranZakatJumlah = $data['total'];
            $daftar->pembayaranZakatMetode = $data['metode'];
            date_default_timezone_set('Asia/Jakarta');
            $daftar->pembayaranZakatTgl = date('Y-m-d H:i:s');
            $daftar->pembayaranZakatStatus = 'belum-konfirmasi';
            // var_dump($daftar);
            // exit();
            $daftar->save(false);

            return $this->render('info-pembayaran', ['daftar' => $daftar]);
        }

    }

    public function actionUploadPembayaran($id)
    {
        $data = PembayaranZakat::find()->where(['pembayaranZakatId' => $id])->one();

        $model = new \yii\base\DynamicModel(['file']);
        $model->addRule(['file'], 'file');

        if ($data2 = Yii::$app->request->post()) {
            $model->file = UploadedFile::getInstance($model, 'file');
            $data->pembayaranZakatBukti = $model['file']->name;
            $data->pembayaranZakatStatus = 'konfirmasi';
            $data->save();
            $model->file->saveAs(Yii::getAlias('@backend') . "/web/foto/" . $model->file->name);
            return $this->render('berhasil');
        }


        return $this->render('upload-pembayaran', ['data' => $data, 'model' => $model]);
    }

    public function actionBayarZakat2($id, $total)
    {
        $cookies = Yii::$app->request->cookies;
        $data2 = $cookies->getValue('daftar');

        $zakat = JenisZakat::find($id)->one();
        // $language = $cookies->getValue('language', 'en');
        $data = [
            'user' => $data2['nama'],
            'email' => $data2['email'],
            'noHp' => $data2['noHp'],
            'alamat' => $data2['alamat'],
            'total' => $total,
            'zakat' => $zakat->jenisZakatNama,
            'zakatid' => $zakat->jenisZakatId
        ];

        $metode = MetodePembayaran::find()->all();
        return $this->render('bayar-zakat', ['data' => $data, 'metode' => $metode]);
    }

    public function actionBayarZakat($id, $total)
    {
        if (Yii::$app->user->isGuest) {
            $session = Yii::$app->session;
            // return $this->redirect(['site/daftar-pembayaran', 'id' => $id, 'total' => $total]);
            Url::remember();
            return $this->redirect(['site/login']);
        }
        $zakat = JenisZakat::find()->where(['jenisZakatId' => $id])->one();
        $data = [
            'nama' => Yii::$app->user->identity->nama,
            'email' => Yii::$app->user->identity->email,
            'noHp' => Yii::$app->user->identity->telepon,
            'alamat' => Yii::$app->user->identity->alamat,
            'user' => Yii::$app->user->identity->id,
            'total' => $total,
            'zakat' => $zakat->jenisZakatNama,
            'zakatid' => $zakat->jenisZakatId
        ];
        $metode = MetodePembayaran::find()->all();
        return $this->render('bayar-zakat', ['data' => $data, 'metode' => $metode]);
    }

    public function actionProfile()
    {
        // $user = User::find()->where(['userId' => Yii::$app->user->identity->userId])->one();
        $data = PembayaranZakat::find()->where(['pembayaranZakatUserId' => Yii::$app->user->identity->userId])->orderBy(['pembayaranZakatTgl' => SORT_DESC])->all();

        return $this->render('profile', ['data' => $data]);
    }

    public function actionProgram(){
        $jenisProgram = \common\models\JenisProgram::find()->all();

        return $this->render('program', ['jenisProgram'=>$jenisProgram]);
    }

    public function actionDetailProgram($id){
        $data = \common\models\InfoProgram::find()->where(['infoProgramId'=>$id])->one();

        return $this->render('detail-program', ['data'=>$data]);
    }


    public function actionRekening(){
        $data = MetodePembayaran::find()->all();
        return $this->render('rekening', ['data'=>$data]);
    }
}
