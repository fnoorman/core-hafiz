<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Zonetogeozone;

/**
 * ZonetogeozoneSearch represents the model behind the search form about `common\models\Zonetogeozone`.
 */
class ZonetogeozoneSearch extends Zonetogeozone
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'country_id', 'zone_id', 'created_at', 'updated_at', 'geo_zone_id'], 'integer'],
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
        $query = Zonetogeozone::find();

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
            'country_id' => $this->country_id,
            'zone_id' => $this->zone_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'geo_zone_id' => $this->geo_zone_id,
        ]);

        return $dataProvider;
    }
}
