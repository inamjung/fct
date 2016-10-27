<?php

namespace app\modules\fct\models;

use Yii;

/**
 * This is the model class for table "fctdepart".
 *
 * @property integer $id
 * @property string $name
 * @property string $group_id
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
            [['name'], 'string', 'max' => 100],
            [['group_id'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'หน่วยงาน',
            'group_id' => 'กลุ่มงาน',
        ];
    }
}
