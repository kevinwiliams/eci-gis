<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "constituencies".
 *
 * @property integer $con_id
 * @property string $constituency
 * @property string $parish
 * @property integer $con_parish_id
 */
class Constituencies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'constituencies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['con_parish_id'], 'integer'],
            [['constituency', 'parish'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'con_id' => 'Con ID',
            'constituency' => 'Constituency',
            'parish' => 'Parish',
            'con_parish_id' => 'Con Parish ID',
        ];
    }
}
