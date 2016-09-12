<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "eci".
 *
 * @property integer $eci_id
 * @property string $eci_name
 * @property integer $eci_parish_id
 *
 * @property Parishes $eciParish
 * @property Papers[] $papers
 * @property Teachers[] $teachers
 */
class Eci extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eci';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eci_parish_id'], 'integer'],
            [['eci_name'], 'string', 'max' => 150],
            [['date_modified'], 'safe'],
            [['modified_by'], 'string', 'max' => 50],
            [['eci_parish_id'], 'exist', 'skipOnError' => true, 'targetClass' => Parishes::className(), 'targetAttribute' => ['eci_parish_id' => 'parish_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eci_id' => 'Eci ID',
            'eci_name' => 'School',
            'eci_parish_id' => 'Parish',
            'date_modified' => 'Date Modified',
            'modified_by' => 'Modified By'
        ];
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
    public function getPapers()
    {
        return $this->hasMany(Papers::className(), ['paper_eci_id' => 'eci_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teachers::className(), ['teacher_eci_id' => 'eci_id']);
    }
}
