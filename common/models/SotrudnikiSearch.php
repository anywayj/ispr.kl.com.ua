<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Sotrudniki;

/**
 * SotrudnikiSearch represents the model behind the search form of `common\models\Sotrudniki`.
 */
class SotrudnikiSearch extends Sotrudniki
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sotrydnika'], 'integer'],
            [['second_name', 'first_name', 'last_name', 'position', 'subdivision', 'date_start_work'], 'safe'],
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
        $query = Sotrudniki::find();

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
            'id_sotrydnika' => $this->id_sotrydnika,
            'date_start_work' => $this->date_start_work,
        ]);

        $query->andFilterWhere(['like', 'second_name', $this->second_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'subdivision', $this->subdivision]);

        return $dataProvider;
    }
}
