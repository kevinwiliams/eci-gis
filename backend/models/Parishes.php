<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "parishes".
 *
 * @property integer $parish_id
 * @property string $parish_name
 * @property integer $region
 *
 * @property Eci[] $ecis
 * @property Papers[] $papers
 * @property Results[] $results
 */
class Parishes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parishes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region'], 'integer'],
            [['parish_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parish_id' => 'Parish ID',
            'parish_name' => 'Parish Name',
            'region' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEcis()
    {
        return $this->hasMany(Eci::className(), ['eci_parish_id' => 'parish_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPapers()
    {
        return $this->hasMany(Papers::className(), ['paper_parish_id' => 'parish_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Results::className(), ['parish_id' => 'parish_id']);
    }
}
