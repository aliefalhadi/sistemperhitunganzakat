<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "info_program".
 *
 * @property int $infoProgramId
 * @property int $infoProgramJenisProgramId
 * @property string $infoProgramJudul
 * @property string $infoProgramTanggal
 * @property string $infoProgramIsi
 * @property string $infoProgramFoto
 * @property string $infoProgramStatus
 */
class InfoProgram extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info_program';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['infoProgramJenisProgramId'], 'integer'],
            [['infoProgramTanggal'], 'safe'],
            [['infoProgramIsi', 'infoProgramFoto', 'infoProgramStatus'], 'string'],
            [['infoProgramJudul'], 'string', 'max' => 35],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'infoProgramId' => 'Info Program ID',
            'infoProgramJenisProgramId' => 'Info Program Jenis Program ID',
            'infoProgramJudul' => 'Info Program Judul',
            'infoProgramTanggal' => 'Info Program Tanggal',
            'infoProgramIsi' => 'Info Program Isi',
            'infoProgramFoto' => 'Info Program Foto',
            'infoProgramStatus' => 'Info Program Status',
        ];
    }
}
