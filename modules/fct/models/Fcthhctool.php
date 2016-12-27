<?php

namespace app\modules\fct\models;

use Yii;

/**
 * This is the model class for table "fcthhctool".
 *
 * @property integer $id
 * @property string $name
 */
class Fcthhctool extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fcthhctool';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'อุปกรณ์',
        ];
    }
}
