<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\InfoProgram;

/**
 * InfoProgramSearch represents the model behind the search form of `common\models\InfoProgram`.
 */
class InfoProgramSearch extends InfoProgram
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['infoProgramId', 'infoProgramJenisProgramId'], 'integer'],
            [['infoProgramJudul', 'infoProgramTanggal', 'infoProgramIsi', 'infoProgramFoto', 'infoProgramStatus'], 'safe'],
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
        $query = InfoProgram::find();

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
            'infoProgramId' => $this->infoProgramId,
            'infoProgramJenisProgramId' => $this->infoProgramJenisProgramId,
            'infoProgramTanggal' => $this->infoProgramTanggal,
        ]);

        $query->andFilterWhere(['like', 'infoProgramJudul', $this->infoProgramJudul])
            ->andFilterWhere(['like', 'infoProgramIsi', $this->infoProgramIsi])
            ->andFilterWhere(['like', 'infoProgramFoto', $this->infoProgramFoto])
            ->andFilterWhere(['like', 'infoProgramStatus', $this->infoProgramStatus]);

        return $dataProvider;
    }
}
