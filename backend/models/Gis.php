<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ecc_gis_data".
 *
 * @property integer $gis_id
 * @property integer $eci_parish_id
 * @property integer $eci_community_id
 * @property integer $eci_con_id
 * @property string $eccid
 * @property string $eci_name
 * @property string $address
 * @property string $telephone
 * @property string $community
 * @property string $constituency
 * @property string $parish
 * @property string $region
 * @property string $facility_type
 * @property string $email
 * @property string $latitude
 * @property string $longitude
 * @property string $latlng
 */
class Gis extends \yii\db\ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ecc_gis_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eci_parish_id', 'eci_community_id', 'eci_con_id'], 'integer'],
            [['eccid', 'eci_name'], 'required'],
            [['eccid', 'telephone', 'parish', 'facility_type', 'latitude', 'longitude'], 'string', 'max' => 50],
            [['eci_name'], 'string', 'max' => 150],
            [['address', 'email'], 'string', 'max' => 250],
            [['community', 'constituency', 'latlng'], 'string', 'max' => 100],
            [['region'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gis_id' => 'Gis ID',
            'eci_parish_id' => 'Parish',
            'eci_community_id' => 'Community',
            'eci_con_id' => 'Constituency',
            'eccid' => 'ECC ID',
            'eci_name' => 'ECI Name',
            'address' => 'Address',
            'telephone' => 'Telephone',
            'community' => 'Community',
            'constituency' => 'Constituency',
            'parish' => 'Parish',
            'region' => 'Region',
            'facility_type' => 'Facility Type',
            'email' => 'Email',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'latlng' => 'Coordinates',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEciCommunity()
    {
        return $this->hasOne(Communities::className(), ['comm_id' => 'eci_community_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEciParish()
    {
        return $this->hasOne(Parishes::className(), ['parish_id' => 'eci_parish_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEciConstituency()
    {
        return $this->hasOne(Constituencies::className(), ['con_id' => 'eci_con_id']);
    }
}
