<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property integer $teacher_id
 * @property integer $teacher_eci_id
 * @property string $teacher_name
 * @property string $modified_on
 * @property string $modified_by
 *
 * @property Papers[] $papers
 * @property Eci $teacherEci
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_name'], 'required'],
            [['teacher_name'], 'string', 'max' => 150],
            [['date_modified','teacher_eci_id'], 'safe'],
            [['modified_by'], 'string', 'max' => 50],
            [['teacher_eci_id'], 'exist', 'skipOnError' => true, 'targetClass' => Eci::className(), 'targetAttribute' => ['teacher_eci_id' => 'eci_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teacher_id' => 'Teacher ID',
            'teacher_eci_id' => 'Teacher Eci ID',
            'teacher_name' => 'Teacher Name',
            'date_modified' => 'Modified On',
            'modified_by' => 'Modified By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPapers()
    {
        return $this->hasMany(Papers::className(), ['paper_teacher_id' => 'teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacherEci()
    {
        return $this->hasOne(Eci::className(), ['eci_id' => 'teacher_eci_id']);
    }
}
