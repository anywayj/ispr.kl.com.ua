<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Sotrudniki".
 *
 * @property int $id_sotrydnika
 * @property string $second_name
 * @property string $first_name
 * @property string $last_name
 * @property string $position
 * @property string $subdivision
 * @property string $date_start_work
 */
class Sotrudniki extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Sotrudniki';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['second_name', 'first_name', 'last_name', 'position', 'subdivision', 'date_start_work'], 'required'],
            [['date_start_work'], 'safe'],
            [['second_name', 'first_name', 'last_name', 'position', 'subdivision'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sotrydnika' => 'Ид сотрудника',
            'second_name' => 'Фамилия',
            'first_name' => 'Имя',
            'last_name' => 'Отчество',
            'position' => 'Должность',
            'subdivision' => 'Подразделение',
            'date_start_work' => 'Дата приема на работу',
        ];
    }
}
