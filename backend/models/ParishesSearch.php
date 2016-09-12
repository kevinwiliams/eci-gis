<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Parishes;

/**
 * ParishesSearch represents the model behind the search form about `backend\models\Parishes`.
 */
class ParishesSearch extends Parishes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parish_id', 'region'], 'integer'],
            [['parish_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Parishes::find();

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
            'parish_id' => $this->parish_id,
            'region' => $this->region,
        ]);

        $query->andFilterWhere(['like', 'parish_name', $this->parish_name]);

        return $dataProvider;
    }
}
