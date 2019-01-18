<?php
namespace common\auth;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class Auth extends AuthAbstract
{
    /**
     * Roles and permission
     *
     * @var array $roles
     */
    protected static $roles = [
        // untuk admin
        'Admin' => [
            // user
            'user.index',
            'user.create',
            'user.update',
            'user.delete',
            'user.view',

            //data pegawai
            'pegawai.index',
            'pegawai.create',
            'pegawai.update',
            'pegawai.delete',
            'pegawai.view',

            //data mustahik
            'mustahik.index',
            'mustahik.create',
            'mustahik.update',
            'mustahik.delete',
            'mustahik.view',

            //data jenis zakat
            'jenis-zakat.index',
            'jenis-zakat.create',
            'jenis-zakat.update',
            'jenis-zakat.delete',
            'jenis-zakat.view',

            //data jenis program
            'jenis-program.index',
            'jenis-program.create',
            'jenis-program.update',
            'jenis-program.delete',
            'jenis-program.view',

            //info program
            'info-program.index',
            'info-program.create',
            'info-program.update',
            'info-program.delete',
            'info-program.view',


            //data tanya Jawab
            'tanya-jawab.index',
            'tanya-jawab.create',
            'tanya-jawab.update',
            'tanya-jawab.delete',
            'tanya-jawab.view',

        

            //data pembayaran zakat
            'pembayaran-zakat.index',
            'pembayaran-zakat.view',


            'site.index',
            'site.login',
            'site.logout',

        ],
        // untuk sekeretaris
        'Amil' => [

            //permohonan
            'pembayaran-zakat.index',
            'pembayaran-zakat.view',
            'pembayaran-zakat.update',
            'pembayaran-zakat.create',

            'user.index',
            'user.create',
            'user.update',
            'user.view',

            'site.index',
            'user.view',
            'site.logout',

        ],
        'Pemohon' => [
            'site.index',
            'user.view',
            'site.logout',
        ]
    ];
    private static $controller;
    private static $action;
    /**
     * Periksa authorization
     *
     * @param $action
     * @param $user
     *
     * @return bool
     */
    public static function authorization($action, $user = null)
    {
        self::$action = $action->id;
        self::$controller = $action->controller->id;
        $user = isset(Yii::$app->user->identity->role) ?
            Yii::$app->user->identity->role : $user;
        if ($user) {
            if (isset(self::$roles[$user])) {
                return in_array(
                    self::$controller . '.' . self::$action,
                    self::$roles[$user]
                );
            }
        }
        return self::checkOpenAuth();
    }
    /**
     * handle all behaviors of controller class
     *
     * @param array $params
     * @return array
     */
    public static function behaviors($params)
    {
        $params = new \ArrayObject($params, \ArrayObject::ARRAY_AS_PROPS);
        self::setOpenAuth('site', 'login');
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => [
                    'logout',
                    'index',
                    'create',
                    'balas',
                    'update',
                    'delete'
                ],
                'rules' => [
                    [
                        'actions' => [
                            'logout',
                            'index',
                            'create',
                            'balas',
                            'update',
                            'delete'
                        ],
                        'allow' => true,
                        'matchCallback' =>
                            isset($params->match) ? $params->match :
                            function ($rule, $action) {
                            return Auth::authorization($action);
                        },
                    ],
                ],
                'denyCallback' =>
                    isset($params->deny) ?
                    $params->deny : new \Exception()
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    private static $openAuth = [];
    /**
     * memeriksa akses control yang terbuka
     *
     * @return bool
     */
    public static function checkOpenAuth()
    {
        if (self::$controller && self::$action) {
            return in_array(
                self::$controller . '.' . self::$action,
                self::$openAuth
            ) ? true : false;
        }
        return false;
    }
    /**
     * mengatur controller dengan action yang terbuka
     *
     * @param $controller
     * @param $action
     */
    public static function setOpenAuth($controller, $action)
    {
        self::$openAuth[] = $controller . "." . $action;
    }
    /**
     * mengambil role saat ini
     *
     * @return string
     */
    public static function getRole()
    {
        return Yii::$app->user->identity->role;
    }
    /**
     * memeriksa role
     *
     * @return string
     */
    public static function checkRole($role)
    {
        return Yii::$app->user->identity->role === $role;
    }
}
