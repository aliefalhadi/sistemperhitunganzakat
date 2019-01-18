<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis_zakat".
 *
 * @property int $jenisZakatId
 * @property string $jenisZakatNama
 * @property double $jenisZakatNisab
 * @property string $jenisZakatStatus
 */
class JenisZakat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_zakat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenisZakatNisab'], 'number'],
            [['jenisZakatStatus'], 'string'],
            [['jenisZakatNama'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jenisZakatId' => 'Jenis Zakat ID',
            'jenisZakatNama' => 'Jenis Zakat Nama',
            'jenisZakatNisab' => 'Jenis Zakat Nisab',
            'jenisZakatStatus' => 'Jenis Zakat Status',
        ];
    }
}
