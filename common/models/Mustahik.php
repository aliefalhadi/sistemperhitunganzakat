<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mustahik".
 *
 * @property int $mustahikId
 * @property string $mustahikNama
 * @property string $mustahikNIK
 * @property string $mustahikTempatLahir
 * @property string $mustahikTanggalLahir
 * @property string $mustahikJenisKelamin
 * @property string $mustahikAlamat
 * @property string $mustahhikTelepon
 * @property string $mustahikEmail
 * @property string $mustahikStatus
 */
class Mustahik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mustahik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mustahikNIK'], 'integer'],
            [['mustahikTanggalLahir'], 'safe'],
            [['mustahikJenisKelamin', 'mustahikStatus'], 'string'],
            [['mustahikNama', 'mustahikTempatLahir', 'mustahikAlamat', 'mustahikEmail'], 'string', 'max' => 35],
            [['mustahhikTelepon'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mustahikId' => 'Mustahik ID',
            'mustahikNama' => 'Mustahik Nama',
            'mustahikNIK' => 'Mustahik Nik',
            'mustahikTempatLahir' => 'Mustahik Tempat Lahir',
            'mustahikTanggalLahir' => 'Mustahik Tanggal Lahir',
            'mustahikJenisKelamin' => 'Mustahik Jenis Kelamin',
            'mustahikAlamat' => 'Mustahik Alamat',
            'mustahhikTelepon' => 'Mustahhik Telepon',
            'mustahikEmail' => 'Mustahik Email',
            'mustahikStatus' => 'Mustahik Status',
        ];
    }
}
