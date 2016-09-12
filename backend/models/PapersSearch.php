<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Papers;

/**
 * PapersSearch represents the model behind the search form about `backend\models\Papers`.
 */
class PapersSearch extends Papers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['paper_id',  'item_1', 'item_2', 'item_3', 'item_4', 'item_5', 'item_6', 'item_7', 'item_8', 'item_9', 'item_10', 'item_11', 'item_12', 'item_13', 'item_14', 'item_15', 'item_16', 'item_17', 'item_18', 'item_19', 'item_20', 'item_21', 'item_22', 'item_23', 'item_24', 'item_25', 'item_26', 'item_27', 'item_28', 'item_29', 'item_30', 'item_31', 'item_32', 'item_33', 'item_34', 'item_35', 'item_36', 'item_37', 'item_38', 'item_39', 'item_40'], 'integer'],
            [['child_name', 'attendance', 'date_modified', 'paper_parish_id', 'paper_teacher_id', 'paper_eci_id','gender'], 'safe'],
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
        $query = Papers::find();

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

        //$query->joinWith('parishes');

        // grid filtering conditions
        $query->andFilterWhere([
            'paper_id' => $this->paper_id,
            //'paper_parish_id' => $this->paper_parish_id,
            //'paper_teacher_id' => $this->paper_teacher_id,
            //'paper_eci_id' => $this->paper_eci_id,
            'gender'=>$this->gender,
            'item_1' => $this->item_1,
            'item_2' => $this->item_2,
            'item_3' => $this->item_3,
            'item_4' => $this->item_4,
            'item_5' => $this->item_5,
            'item_6' => $this->item_6,
            'item_7' => $this->item_7,
            'item_8' => $this->item_8,
            'item_9' => $this->item_9,
            'item_10' => $this->item_10,
            'item_11' => $this->item_11,
            'item_12' => $this->item_12,
            'item_13' => $this->item_13,
            'item_14' => $this->item_14,
            'item_15' => $this->item_15,
            'item_16' => $this->item_16,
            'item_17' => $this->item_17,
            'item_18' => $this->item_18,
            'item_19' => $this->item_19,
            'item_20' => $this->item_20,
            'item_21' => $this->item_21,
            'item_22' => $this->item_22,
            'item_23' => $this->item_23,
            'item_24' => $this->item_24,
            'item_25' => $this->item_25,
            'item_26' => $this->item_26,
            'item_27' => $this->item_27,
            'item_28' => $this->item_28,
            'item_29' => $this->item_29,
            'item_30' => $this->item_30,
            'item_31' => $this->item_31,
            'item_32' => $this->item_32,
            'item_33' => $this->item_33,
            'item_34' => $this->item_34,
            'item_35' => $this->item_35,
            'item_36' => $this->item_36,
            'item_37' => $this->item_37,
            'item_38' => $this->item_38,
            'item_39' => $this->item_39,
            'item_40' => $this->item_40,
            'date_modified' => $this->date_modified,
        ]);

        
        
        //$query->joinWith('teachers');

        $query->joinWith('paperEci');
        $query->joinWith('paperTeacher');
        $query->joinWith('paperParish');
        
        
        $query->andFilterWhere(['like', 'child_name', $this->child_name])
            ->andFilterWhere(['like', 'eci.eci_name', $this->paper_eci_id])
            ->andFilterWhere(['like', 'teachers.teacher_name', $this->paper_teacher_id])
            ->andFilterWhere(['like', 'parishes.parish_name', $this->paper_parish_id])
            ->andFilterWhere(['like', 'attendance', $this->attendance]);

        return $dataProvider;
    }
}
