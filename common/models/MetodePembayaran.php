<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "metode_pembayaran".
 *
 * @property int $id
 * @property string $nama
 * @property string $norek
 */
class MetodePembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'metode_pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'norek'], 'required'],
            [['nama', 'norek'], 'string', 'max' => 50],
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
            'norek' => 'Norek',
        ];
    }
}
