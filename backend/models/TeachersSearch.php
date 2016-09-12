<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Teachers;

/**
 * TeachersSearch represents the model behind the search form about `backend\models\Teachers`.
 */
class TeachersSearch extends Teachers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_id'], 'integer'],
            [['teacher_name', 'date_modified', 'modified_by', 'teacher_eci_id'], 'safe'],
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
        $query = Teachers::find();

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
            'teacher_id' => $this->teacher_id,
            //'teacher_eci_id' => $this->teacher_eci_id,
            'date_modified' => $this->date_modified,
        ]);

         $query->joinWith('teacherEci'); //join with Parishes table 

        $query->andFilterWhere(['like', 'teacher_name', $this->teacher_name])
            ->andFilterWhere(['like', 'modified_by', $this->modified_by])
            ->andFilterWhere(['like', 'eci_name', $this->teacher_eci_id]);

        return $dataProvider;
    }
}
