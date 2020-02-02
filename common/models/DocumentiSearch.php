<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Documenti;

/**
 * DocumentiSearch represents the model behind the search form of `common\models\Documenti`.
 */
class DocumentiSearch extends Documenti
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_documenta', 'nomer_documenta', 'id_sotrydnika', 'id_otpyska'], 'integer'],
            [['start_date_reg', 'start_date_otpusk', 'end_date_otpusk'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Documenti::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_documenta' => $this->id_documenta,
            'nomer_documenta' => $this->nomer_documenta,
            'start_date_reg' => $this->start_date_reg,
            'start_date_otpusk' => $this->start_date_otpusk,
            'end_date_otpusk' => $this->end_date_otpusk,
            'id_sotrydnika' => $this->id_sotrydnika,
            'id_otpyska' => $this->id_otpyska,
        ]);

        return $dataProvider;
    }
}
