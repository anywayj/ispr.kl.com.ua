<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vakansia1".
 *
 * @property int $id_vakansia
 * @property string $name
 */
class Vakansia1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vakansia1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_vakansia' => 'Id Vakansia',
            'name' => 'Name',
        ];
    }
}
