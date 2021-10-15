<?php

namespace app\modules\control_university\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\control_university\models\IshJadvallari;

/**
 * IshJadvallariSearch represents the model behind the search form of `app\modules\control_university\models\IshJadvallari`.
 */
class IshJadvallariSearch extends IshJadvallari
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ish_boshlanish_vaqti', 'ish_tugash_vaqti', 'ish_grafigi', 'tarif', 'qoshimcha'], 'safe'],
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
        $query = IshJadvallari::find();

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
            'ish_boshlanish_vaqti' => $this->ish_boshlanish_vaqti,
            'ish_tugash_vaqti' => $this->ish_tugash_vaqti,
        ]);

        $query->andFilterWhere(['like', 'ish_grafigi', $this->ish_grafigi])
            ->andFilterWhere(['like', 'tarif', $this->tarif])
            ->andFilterWhere(['like', 'qoshimcha', $this->qoshimcha]);

        return $dataProvider;
    }
}
