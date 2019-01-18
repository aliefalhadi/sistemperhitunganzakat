<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
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
class User extends \yii\db\ActiveRecord
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
            [['foto', 'role', 'status'], 'string'],
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
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'nama' => 'Nama',
            'email' => 'Email',
            'telepon' => 'Telepon',
            'foto' => 'Foto',
            'tanggal_pendaftaran' => 'Tanggal Pendaftaran',
            'role' => 'Role',
            'status' => 'Status',
        ];
    }
}
