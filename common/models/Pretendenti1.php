<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pretendenti1".
 *
 * @property int $id_pretendenti
 * @property string $fio
 */
class Pretendenti1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pretendenti1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio'], 'required'],
            [['fio'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pretendenti' => 'Id Pretendenti',
            'fio' => 'Fio',
        ];
    }
}
