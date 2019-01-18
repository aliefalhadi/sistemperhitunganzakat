<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PembayaranZakat;

/**
 * PembayaranZakatSearch represents the model behind the search form of `common\models\PembayaranZakat`.
 */
class PembayaranZakatSearch extends PembayaranZakat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pembayaranZakatId', 'pembayaranZakatUserId', 'pembayaranZakatJenisZakatId', 'pembayaranZakatPegawaiId', 'pembayaranZakatJumlah'], 'integer'],
            [['pembayaranZakatBukti', 'pembayaranZakatStatus'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PembayaranZakat::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pembayaranZakatId' => $this->pembayaranZakatId,
            'pembayaranZakatUserId' => $this->pembayaranZakatUserId,
            'pembayaranZakatJenisZakatId' => $this->pembayaranZakatJenisZakatId,
            'pembayaranZakatPegawaiId' => $this->pembayaranZakatPegawaiId,
            'pembayaranZakatJumlah' => $this->pembayaranZakatJumlah,
        ]);

        $query->andFilterWhere(['like', 'pembayaranZakatBukti', $this->pembayaranZakatBukti])
            ->andFilterWhere(['like', 'pembayaranZakatStatus', $this->pembayaranZakatStatus]);

        return $dataProvider;
    }
}
