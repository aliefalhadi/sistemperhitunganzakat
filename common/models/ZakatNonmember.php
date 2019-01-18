<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "zakat_nonmember".
 *
 * @property int $id
 * @property string $nama
 * @property string $email
 * @property int $noHp
 * @property string $alamat
 * @property int $jenisZakatId
 * @property int $total
 * @property int $metodepembayaranId
 * @property string $tglPembayaran
 * @property int $pegawaiId
 * @property string $status
 */
class ZakatNonmember extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakat_nonmember';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['noHp', 'jenisZakatId', 'total', 'metodepembayaranId', 'pegawaiId'], 'integer'],
            [['alamat', 'status'], 'string'],
            [['tglPembayaran'], 'safe'],
            [['nama'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 110],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'email' => 'Email',
            'noHp' => 'No Hp',
            'alamat' => 'Alamat',
            'jenisZakatId' => 'Jenis Zakat ID',
            'total' => 'Total',
            'metodepembayaranId' => 'Metodepembayaran ID',
            'tglPembayaran' => 'Tgl Pembayaran',
            'pegawaiId' => 'Pegawai ID',
            'status' => 'Status',
        ];
    }
}
