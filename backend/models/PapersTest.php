<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "papers".
 *
 * @property string $paper_id
 * @property integer $paper_parish_id
 * @property integer $paper_teacher_id
 * @property integer $paper_eci_id
 * @property string $child_name
 * @property string $gender
 * @property string $dob
 * @property string $attendance
 * @property integer $item_1
 * @property integer $item_2
 * @property integer $item_3
 * @property integer $item_4
 * @property integer $item_5
 * @property integer $item_6
 * @property integer $item_7
 * @property integer $item_8
 * @property integer $item_9
 * @property integer $item_10
 * @property integer $item_11
 * @property integer $item_12
 * @property integer $item_13
 * @property integer $item_14
 * @property integer $item_15
 * @property integer $item_16
 * @property integer $item_17
 * @property integer $item_18
 * @property integer $item_19
 * @property integer $item_20
 * @property integer $item_21
 * @property integer $item_22
 * @property integer $item_23
 * @property integer $item_24
 * @property integer $item_25
 * @property integer $item_26
 * @property integer $item_27
 * @property integer $item_28
 * @property integer $item_29
 * @property integer $item_30
 * @property integer $item_31
 * @property integer $item_32
 * @property integer $item_33
 * @property integer $item_34
 * @property integer $item_35
 * @property integer $item_36
 * @property integer $item_37
 * @property integer $item_38
 * @property integer $item_39
 * @property integer $item_40
 * @property string $modified_by
 * @property string $date_modified
 *
 * @property Eci $paperEci
 * @property Parishes $paperParish
 * @property Teachers $paperTeacher
 */
class PapersTest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'papers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['paper_parish_id', 'paper_teacher_id', 'paper_eci_id', 'item_1', 'item_2', 'item_3', 'item_4', 'item_5', 'item_6', 'item_7', 'item_8', 'item_9', 'item_10', 'item_11', 'item_12', 'item_13', 'item_14', 'item_15', 'item_16', 'item_17', 'item_18', 'item_19', 'item_20', 'item_21', 'item_22', 'item_23', 'item_24', 'item_25', 'item_26', 'item_27', 'item_28', 'item_29', 'item_30', 'item_31', 'item_32', 'item_33', 'item_34', 'item_35', 'item_36', 'item_37', 'item_38', 'item_39', 'item_40'], 'integer'],
            [['gender'], 'string'],
            [['dob', 'date_modified'], 'safe'],
            [['child_name'], 'string', 'max' => 150],
            [['attendance', 'modified_by'], 'string', 'max' => 50],
            [['paper_eci_id'], 'exist', 'skipOnError' => true, 'targetClass' => Eci::className(), 'targetAttribute' => ['paper_eci_id' => 'eci_id']],
            [['paper_parish_id'], 'exist', 'skipOnError' => true, 'targetClass' => Parishes::className(), 'targetAttribute' => ['paper_parish_id' => 'parish_id']],
            [['paper_teacher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['paper_teacher_id' => 'teacher_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'paper_id' => 'Paper ID',
            'paper_parish_id' => 'Paper Parish ID',
            'paper_teacher_id' => 'Paper Teacher ID',
            'paper_eci_id' => 'Paper Eci ID',
            'child_name' => 'Child Name',
            'gender' => 'Gender',
            'dob' => 'Dob',
            'attendance' => 'Attendance',
            'item_1' => 'Item 1',
            'item_2' => 'Item 2',
            'item_3' => 'Item 3',
            'item_4' => 'Item 4',
            'item_5' => 'Item 5',
            'item_6' => 'Item 6',
            'item_7' => 'Item 7',
            'item_8' => 'Item 8',
            'item_9' => 'Item 9',
            'item_10' => 'Item 10',
            'item_11' => 'Item 11',
            'item_12' => 'Item 12',
            'item_13' => 'Item 13',
            'item_14' => 'Item 14',
            'item_15' => 'Item 15',
            'item_16' => 'Item 16',
            'item_17' => 'Item 17',
            'item_18' => 'Item 18',
            'item_19' => 'Item 19',
            'item_20' => 'Item 20',
            'item_21' => 'Item 21',
            'item_22' => 'Item 22',
            'item_23' => 'Item 23',
            'item_24' => 'Item 24',
            'item_25' => 'Item 25',
            'item_26' => 'Item 26',
            'item_27' => 'Item 27',
            'item_28' => 'Item 28',
            'item_29' => 'Item 29',
            'item_30' => 'Item 30',
            'item_31' => 'Item 31',
            'item_32' => 'Item 32',
            'item_33' => 'Item 33',
            'item_34' => 'Item 34',
            'item_35' => 'Item 35',
            'item_36' => 'Item 36',
            'item_37' => 'Item 37',
            'item_38' => 'Item 38',
            'item_39' => 'Item 39',
            'item_40' => 'Item 40',
            'modified_by' => 'Modified By',
            'date_modified' => 'Date Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaperEci()
    {
        return $this->hasOne(Eci::className(), ['eci_id' => 'paper_eci_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaperParish()
    {
        return $this->hasOne(Parishes::className(), ['parish_id' => 'paper_parish_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaperTeacher()
    {
        return $this->hasOne(Teachers::className(), ['teacher_id' => 'paper_teacher_id']);
    }
}
