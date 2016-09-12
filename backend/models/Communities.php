<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "communities".
 *
 * @property integer $comm_id
 * @property string $community
 * @property string $constituency
 * @property string $parish
 * @property integer $com_parish_id
 * @property integer $com_con_id
 */
class Communities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'communities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['com_parish_id', 'com_con_id'], 'integer'],
            [['community', 'constituency', 'parish'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comm_id' => 'Comm ID',
            'community' => 'Community',
            'constituency' => 'Constituency',
            'parish' => 'Parish',
            'com_parish_id' => 'Com Parish ID',
            'com_con_id' => 'Com Con ID',
        ];
    }
}
