<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\JenisProgram;

/**
 * JenisProgramSearch represents the model behind the search form of `common\models\JenisProgram`.
 */
class JenisProgramSearch extends JenisProgram
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenisProgramId'], 'integer'],
            [['jenisProgramNama', 'jenisProgramStatus'], 'safe'],
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
        $query = JenisProgram::find();

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
            'jenisProgramId' => $this->jenisProgramId,
        ]);

        $query->andFilterWhere(['like', 'jenisProgramNama', $this->jenisProgramNama])
            ->andFilterWhere(['like', 'jenisProgramStatus', $this->jenisProgramStatus]);

        return $dataProvider;
    }
}
