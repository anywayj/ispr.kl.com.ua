<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ocenki1".
 *
 * @property int $id_ocenki
 * @property double $ocenki
 * @property int $id_pretendenti
 * @property int $id_vakansia
 */
class Ocenki1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ocenki1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ocenki', 'id_pretendenti', 'id_vakansia'], 'required'],
            [['ocenki'], 'number'],
            [['id_pretendenti', 'id_vakansia'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ocenki' => 'Id Ocenki',
            'ocenki' => 'Ocenki',
            'id_pretendenti' => 'Id Pretendenti',
            'id_vakansia' => 'Id Vakansia',
        ];
    }
}
