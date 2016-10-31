<?php

namespace app\modules\fct\models;

use Yii;

/**
 * This is the model class for table "pcu_child".
 *
 * @property string $hcode
 * @property string $name
 * @property string $hos_guid
 * @property string $hos_guid_ext
 */
class Pcuchild extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pcu_child';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hcode'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 250],
            [['hos_guid'], 'string', 'max' => 38],
            [['hos_guid_ext'], 'string', 'max' => 64],
            [['hcode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hcode' => 'Hcode',
            'name' => 'Name',
            'hos_guid' => 'Hos Guid',
            'hos_guid_ext' => 'Hos Guid Ext',
        ];
    }
}
