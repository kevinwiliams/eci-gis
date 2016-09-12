<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Eci;

/**
 * EciSearch represents the model behind the search form about `backend\models\Eci`.
 */
class EciSearch extends Eci
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eci_id'], 'integer'],
            [['eci_name'], 'safe'],
            [['date_modified', 'eci_parish_id'], 'safe'],
            [['modified_by'], 'string', 'max' => 50],
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
        $query = Eci::find();

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
            'eci_id' => $this->eci_id,
            //'eci_parish_id' => $this->eci_parish_id,
        ]);

        $query->joinWith('eciParish'); //join with Parishes table 

        $query->andFilterWhere(['like', 'eci_name', $this->eci_name]);
        $query->andFilterWhere(['like', 'parish_name', $this->eci_parish_id]);

        return $dataProvider;
    }
}
