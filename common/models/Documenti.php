<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Documenti".
 *
 * @property int $id_documenta
 * @property int $nomer_documenta
 * @property string $start_date_reg
 * @property string $start_date_otpusk
 * @property string $end_date_otpusk
 * @property int $id_sotrydnika
 * @property int $id_otpyska
 */
class Documenti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Documenti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomer_documenta', 'start_date_reg', 'start_date_otpusk', 'end_date_otpusk', 'id_sotrydnika', 'id_otpyska'], 'required'],
            [['nomer_documenta', 'id_sotrydnika', 'id_otpyska'], 'integer'],
            [['start_date_reg', 'start_date_otpusk', 'end_date_otpusk'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_documenta' => 'Id Documenta',
            'nomer_documenta' => 'Номер документа',
            'start_date_reg' => 'Дата начала регистрации',
            'start_date_otpusk' => 'Начало отпуска',
            'end_date_otpusk' => 'Конец отпуска',
            'id_sotrydnika' => 'ид сотрудника',
            'id_otpyska' => 'ид отпуска',
        ];
    }

    public function getSotrydnik()
    {
        return $this->hasOne(Sotrudniki::className(), ['id_sotrydnika' => 'id_sotrydnika']);
    }
}
