<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Gis;

/**
 * GisSearch represents the model behind the search form about `backend\models\Gis`.
 */
class GisSearch extends Gis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gis_id'], 'integer'],
            [['eccid', 'eci_name', 'address', 'telephone', 'community', 'constituency', 'parish', 'region', 'facility_type', 'email', 'latitude', 'longitude','latlng', 'eci_community_id', 'eci_parish_id', 'eci_con_id'], 'safe'],
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
        $query = Gis::find();

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
            'gis_id' => $this->gis_id,
        ]);

        $query->joinWith('eciCommunity');
        $query->joinWith('eciConstituency');
        $query->joinWith('eciParish');

        $query->andFilterWhere(['like', 'eccid', $this->eccid])
            ->andFilterWhere(['like', 'eci_name', $this->eci_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'constituency', $this->constituency])
            ->andFilterWhere(['like', 'parish', $this->parish])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'facility_type', $this->facility_type])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'latlng', $this->latlng])
            ->andFilterWhere(['like', 'parishes.parish_name', $this->eci_parish_id])
            ->andFilterWhere(['like', 'communities.community', $this->eci_community_id])
            ->andFilterWhere(['like', 'constituencies.constituency', $this->eci_con_id]);

        return $dataProvider;
    }

    public function searchRegion($params, $region)
    {
        $query = Gis::find();

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
            'gis_id' => $this->gis_id,
        ]);

        $query->joinWith('eciCommunity');
        $query->joinWith('eciConstituency');
        $query->joinWith('eciParish');

        $query->andFilterWhere(['like', 'eccid', $this->eccid])
            ->andFilterWhere(['like', 'eci_name', $this->eci_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'telephone', $this->telephone])
            ->andFilterWhere(['like', 'community', $this->community])
            ->andFilterWhere(['like', 'constituency', $this->constituency])
            ->andFilterWhere(['like', 'parish', $this->parish])
            ->andFilterWhere(['parishes.region' =>  $region])
            ->andFilterWhere(['like', 'facility_type', $this->facility_type])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'latlng', $this->latlng])
           // ->andFilterWhere(['and', ['latlng'=> null]])
            ->andFilterWhere(['like', 'parishes.parish_name', $this->eci_parish_id])
            ->andFilterWhere(['like', 'communities.community', $this->eci_community_id])
            ->andFilterWhere(['like', 'constituencies.constituency', $this->eci_con_id]);

        return $dataProvider;
    }
}
