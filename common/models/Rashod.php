<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rashod".
 *
 * @property int $id_rashod
 * @property double $cena
 * @property int $id_predpriyatiya
 * @property int $id_serie
 */
class Rashod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rashod';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cena', 'id_predpriyatiya', 'id_serie'], 'required'],
            [['cena'], 'number'],
            [['id_predpriyatiya', 'id_serie'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_rashod' => 'Id Rashod',
            'cena' => 'Cena',
            'id_predpriyatiya' => 'Id Predpriyatiya',
            'id_serie' => 'Id Serie',
        ];
    }

    public function getPredpriyatiya()
    {
        return $this->hasOne(Predpriyatiya::className(), ['id_predpriyatiya' => 'id_predpriyatiya']);
    }
}
