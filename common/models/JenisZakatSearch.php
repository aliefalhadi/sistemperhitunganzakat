<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\JenisZakat;

/**
 * JenisZakatSearch represents the model behind the search form of `common\models\JenisZakat`.
 */
class JenisZakatSearch extends JenisZakat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenisZakatId'], 'integer'],
            [['jenisZakatNama', 'jenisZakatStatus'], 'safe'],
            [['jenisZakatNisab'], 'number'],
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
        $query = JenisZakat::find();

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
            'jenisZakatId' => $this->jenisZakatId,
            'jenisZakatNisab' => $this->jenisZakatNisab,
        ]);

        $query->andFilterWhere(['like', 'jenisZakatNama', $this->jenisZakatNama])
            ->andFilterWhere(['like', 'jenisZakatStatus', $this->jenisZakatStatus]);

        return $dataProvider;
    }
}
