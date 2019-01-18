<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mustahik;

/**
 * MustahikSearch represents the model behind the search form of `common\models\Mustahik`.
 */
class MustahikSearch extends Mustahik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mustahikId', 'mustahikNIK'], 'integer'],
            [['mustahikNama', 'mustahikTempatLahir', 'mustahikTanggalLahir', 'mustahikJenisKelamin', 'mustahikAlamat', 'mustahhikTelepon', 'mustahikEmail', 'mustahikStatus'], 'safe'],
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
        $query = Mustahik::find();

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
            'mustahikId' => $this->mustahikId,
            'mustahikNIK' => $this->mustahikNIK,
            'mustahikTanggalLahir' => $this->mustahikTanggalLahir,
        ]);

        $query->andFilterWhere(['like', 'mustahikNama', $this->mustahikNama])
            ->andFilterWhere(['like', 'mustahikTempatLahir', $this->mustahikTempatLahir])
            ->andFilterWhere(['like', 'mustahikJenisKelamin', $this->mustahikJenisKelamin])
            ->andFilterWhere(['like', 'mustahikAlamat', $this->mustahikAlamat])
            ->andFilterWhere(['like', 'mustahhikTelepon', $this->mustahhikTelepon])
            ->andFilterWhere(['like', 'mustahikEmail', $this->mustahikEmail])
            ->andFilterWhere(['like', 'mustahikStatus', $this->mustahikStatus]);

        return $dataProvider;
    }
}
