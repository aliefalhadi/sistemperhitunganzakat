<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $pegawaiId
 * @property int $pegawaiUserId
 * @property string $pegawaiNama
 * @property string $pegawaiJabatan
 * @property string $pegawaiAlamat
 * @property string $pegawaitelepon
 * @property string $pegawaiEmail
 * @property string $pegawaiStatus
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawaiUserId'], 'integer'],
            [['pegawaiStatus'], 'string'],
            [['pegawaiNama', 'pegawaiJabatan', 'pegawaiAlamat', 'pegawaiEmail'], 'string', 'max' => 35],
            [['pegawaitelepon'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pegawaiId' => 'Pegawai ID',
            'pegawaiUserId' => 'Pegawai User ID',
            'pegawaiNama' => 'Pegawai Nama',
            'pegawaiJabatan' => 'Pegawai Jabatan',
            'pegawaiAlamat' => 'Pegawai Alamat',
            'pegawaitelepon' => 'Pegawaitelepon',
            'pegawaiEmail' => 'Pegawai Email',
            'pegawaiStatus' => 'Pegawai Status',
        ];
    }
}
