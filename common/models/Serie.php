<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "serie".
 *
 * @property int $id_serie
 * @property string $name
 * @property int $id_sklad
 */
class Serie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'serie';
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
            'id_serie' => 'Id Serie',
            'name' => 'Name',
           
        ];
    }
}
