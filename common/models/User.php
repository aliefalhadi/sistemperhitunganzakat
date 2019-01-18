<?php

namespace common\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $userId
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $email
 * @property string $telepon
 * @property string $foto
 * @property string $tanggal_pendaftaran
 * @property string $role
 * @property string $status
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['role', 'status', 'alamat'], 'string'],
            [['foto'], 'file'],
            [['tanggal_pendaftaran'], 'safe'],
            [['username', 'password', 'nama', 'email'], 'string', 'max' => 35],
            [['telepon'], 'string', 'max' => 20],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'userId' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'nama' => Yii::t('app', 'Nama'),
            'email' => Yii::t('app', 'Email'),
            'telepon' => Yii::t('app', 'Telepon'),
            'alamat' => Yii::t('app', 'Alamat'),
            'foto' => Yii::t('app', 'Foto'),
            'tanggal_pendaftaran' => Yii::t('app', 'Tanggal Pendaftaran'),
            'role' => Yii::t('app', 'Role'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['userId' => $id]);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = $password;//Security::generatePasswordHash($password);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return self::findOne(['userId' => $this->getId()]);
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {

        return $this->password === ($password);
    }

    /**
     * @return \yii\db\ActiveQuery
     */


}
