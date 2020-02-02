<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sklad".
 *
 * @property int $id_sklad
 * @property string $name
 * @property double $kolvo
 * @property int $id_serie
 */
class Sklad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sklad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'kolvo', 'id_serie'], 'required'],
            [['kolvo'], 'number'],
            [['id_serie'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sklad' => 'Id Sklad',
            'name' => 'Name',
            'kolvo' => 'Kolvo',
            'id_serie' => 'Id Serie',
        ];
    }
}
