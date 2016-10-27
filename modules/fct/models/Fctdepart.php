<?php

namespace app\modules\fct\models;

use Yii;

/**
 * This is the model class for table "fctdepart".
 *
 * @property integer $id
 * @property string $name
 * @property string $group
 */
class Fctdepart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fctdepart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['group'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'group' => 'Group',
        ];
    }
}
