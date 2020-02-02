<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Otpysk;

/**
 * OtpyskSearch represents the model behind the search form of `common\models\Otpysk`.
 */
class OtpyskSearch extends Otpysk
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_otpyska'], 'integer'],
            [['tip_otpyska', 'lgoti_po_otpysky'], 'safe'],
            [['oplata_otpyska'], 'number'],
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
        $query = Otpysk::find();

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
            'id_otpyska' => $this->id_otpyska,
            'oplata_otpyska' => $this->oplata_otpyska,
        ]);

        $query->andFilterWhere(['like', 'tip_otpyska', $this->tip_otpyska])
            ->andFilterWhere(['like', 'lgoti_po_otpysky', $this->lgoti_po_otpysky]);

        return $dataProvider;
    }
}
