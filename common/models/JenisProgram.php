<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis_program".
 *
 * @property int $jenisProgramId
 * @property string $jenisProgramNama
 * @property string $jenisProgramStatus
 */
class JenisProgram extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenisProgramStatus'], 'string'],
            [['jenisProgramNama'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jenisProgramId' => 'Jenis Program ID',
            'jenisProgramNama' => 'Jenis Program Nama',
            'jenisProgramStatus' => 'Jenis Program Status',
        ];
    }
}
