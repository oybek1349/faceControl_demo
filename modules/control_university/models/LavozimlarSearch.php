<?php

namespace app\modules\control_university\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\control_university\models\Lavozimlar;

/**
 * LavozimlarSearch represents the model behind the search form of `app\modules\control_university\models\Lavozimlar`.
 */
class LavozimlarSearch extends Lavozimlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nomlanishi', 'tarif'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Lavozimlar::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nomlanishi', $this->nomlanishi])
            ->andFilterWhere(['like', 'tarif', $this->tarif]);

        return $dataProvider;
    }
}
