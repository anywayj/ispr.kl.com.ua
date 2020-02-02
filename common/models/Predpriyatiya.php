<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "predpriyatiya".
 *
 * @property int $id_predpriyatiya
 * @property string $name
 * @property int $id_serie
 * @property double $potrebnosti
 */
class Predpriyatiya extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'predpriyatiya';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_serie', 'potrebnosti'], 'required'],
            [['id_serie'], 'integer'],
            [['potrebnosti'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_predpriyatiya' => 'Id Predpriyatiya',
            'name' => 'Name',
            'id_serie' => 'Id Serie',
            'potrebnosti' => 'Potrebnosti',
        ];
    }

    public function getRashod()
    {
        return $this->hasOne(Rashod::className(), ['id_predpriyatiya' => 'id_predpriyatiya']);
    }
}
