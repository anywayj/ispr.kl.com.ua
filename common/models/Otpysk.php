<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Otpysk".
 *
 * @property int $id_otpyska
 * @property string $tip_otpyska
 * @property double $oplata_otpyska
 * @property string $lgoti_po_otpysky
 */
class Otpysk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Otpysk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tip_otpyska', 'oplata_otpyska', 'lgoti_po_otpysky'], 'required'],
            [['oplata_otpyska'], 'number'],
            [['tip_otpyska', 'lgoti_po_otpysky'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_otpyska' => 'Id Otpyska',
            'tip_otpyska' => 'Тип отпуска',
            'oplata_otpyska' => 'Оплата отпуска',
            'lgoti_po_otpysky' => 'Льготы по отпуску',
        ];
    }
}
