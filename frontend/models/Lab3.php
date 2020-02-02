<?php

namespace frontend\models;

use yii\base\Model;

class Lab3 extends Model
{
    public $start_capital; /* 200 */
    public $spros_high; /* 60% */
    public $spros_high_max; /* 80% */
    public $spros_high_min; /* 20% */ 
    public $spros_low_max; /* 40% */ 
    public $spros_low_min; /* 60% */
    public $high_dohod; /* 500 */
    public $low_dohod; /* 300 */
    public $prognoz; /* 140 */
    public $bezrisk_osnova; /* 20% */
    public $years; /* 5 лет */
    public $zatrati; /* 150 тыс */
    public $rashodi; /* 20 тыс */
    public $arenda; /* 30% */
    public $ogovor_rashodi; /* 140 */


    public function rules()
    {
        return [
            [['start_capital','spros_high','spros_high_max','spros_high_min','spros_low_max','spros_low_min','high_dohod','low_dohod','prognoz','bezrisk_osnova','years','zatrati','rashodi','arenda','ogovor_rashodi'], 'required'],
            [['start_capital','spros_high','spros_high_max','spros_low_min','spros_low_max','spros_low_min','high_dohod','low_dohod','prognoz','bezrisk_osnova','years','zatrati','rashodi','arenda','ogovor_rashodi'], 'safe'],
        ];
    }


}