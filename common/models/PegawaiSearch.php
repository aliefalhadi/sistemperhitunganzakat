<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pegawai;

/**
 * PegawaiSearch represents the model behind the search form of `common\models\Pegawai`.
 */
class PegawaiSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawaiId', 'pegawaiUserId'], 'integer'],
            [['pegawaiNama', 'pegawaiJabatan', 'pegawaiAlamat', 'pegawaitelepon', 'pegawaiEmail', 'pegawaiStatus'], 'safe'],
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
        $query = Pegawai::find();

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
            'pegawaiId' => $this->pegawaiId,
            'pegawaiUserId' => $this->pegawaiUserId,
        ]);

        $query->andFilterWhere(['like', 'pegawaiNama', $this->pegawaiNama])
            ->andFilterWhere(['like', 'pegawaiJabatan', $this->pegawaiJabatan])
            ->andFilterWhere(['like', 'pegawaiAlamat', $this->pegawaiAlamat])
            ->andFilterWhere(['like', 'pegawaitelepon', $this->pegawaitelepon])
            ->andFilterWhere(['like', 'pegawaiEmail', $this->pegawaiEmail])
            ->andFilterWhere(['like', 'pegawaiStatus', $this->pegawaiStatus]);

        return $dataProvider;
    }
}
