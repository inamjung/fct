<?php

namespace app\modules\fct\models;

use Yii;

/**
 * This is the model class for table "fcthosin".
 *
 * @property integer $id
 * @property string $name
 * @property string $group
 */
class Fcthosin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fcthosin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
