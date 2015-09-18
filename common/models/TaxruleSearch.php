<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Taxrule;

/**
 * TaxruleSearch represents the model behind the search form about `common\models\Taxrule`.
 */
class TaxruleSearch extends Taxrule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tax_class_id', 'tax_rate_id', 'priority'], 'integer'],
            [['based'], 'safe'],
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
        $query = Taxrule::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tax_class_id' => $this->tax_class_id,
            'tax_rate_id' => $this->tax_rate_id,
            'priority' => $this->priority,
        ]);

        $query->andFilterWhere(['like', 'based', $this->based]);

        return $dataProvider;
    }
}
