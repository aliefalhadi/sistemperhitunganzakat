<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tanya_jawab".
 *
 * @property int $tanyaJawanId
 * @property int $tanyaJawabUserId
 * @property string $tanyaJawabPertanyaan
 * @property string $tanyaJawabJawaban
 */
class TanyaJawab extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tanya_jawab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanyaJawabUserId'], 'integer'],
            [['tanyaJawabPertanyaan', 'tanyaJawabJawaban'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanyaJawanId' => 'Tanya Jawan ID',
            'tanyaJawabUserId' => 'Tanya Jawab User ID',
            'tanyaJawabPertanyaan' => 'Tanya Jawab Pertanyaan',
            'tanyaJawabJawaban' => 'Tanya Jawab Jawaban',
        ];
    }
}
