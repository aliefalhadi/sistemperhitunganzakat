<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pembayaran_zakat".
 *
 * @property int $pembayaranZakatId
 * @property int $pembayaranZakatUserId
 * @property int $pembayaranZakatJenisZakatId
 * @property int $pembayaranZakatPegawaiId
 * @property int $pembayaranZakatJumlah
 * @property int $pembayaranZakatMetode
 * @property string $pembayaranZakatTgl
 * @property string $pembayaranZakatBukti
 * @property string $pembayaranZakatStatus
 */
class PembayaranZakat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran_zakat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pembayaranZakatUserId', 'pembayaranZakatJenisZakatId', 'pembayaranZakatPegawaiId', 'pembayaranZakatJumlah', 'pembayaranZakatStatus'], 'required'],
            [['pembayaranZakatUserId', 'pembayaranZakatJenisZakatId', 'pembayaranZakatPegawaiId', 'pembayaranZakatJumlah', 'pembayaranZakatMetode'], 'integer'],
            [['pembayaranZakatTgl', 'pembayaranZakatBukti'], 'safe'],
            [[ 'pembayaranZakatStatus'], 'string'],
        
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pembayaranZakatId' => 'Pembayaran Zakat ID',
            'pembayaranZakatUserId' => 'Pembayaran Zakat User ID',
            'pembayaranZakatJenisZakatId' => 'Pembayaran Zakat Jenis Zakat ID',
            'pembayaranZakatPegawaiId' => 'Pembayaran Zakat Pegawai ID',
            'pembayaranZakatJumlah' => 'Pembayaran Zakat Jumlah',
            'pembayaranZakatMetode' => 'Pembayaran Zakat Metode',
            'pembayaranZakatTgl' => 'Pembayaran Zakat Tgl',
            'pembayaranZakatBukti' => 'Pembayaran Zakat Bukti',
            'pembayaranZakatStatus' => 'Pembayaran Zakat Status',
        ];
    }
}
