<?php

namespace app\modules\control_university\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\control_university\models\Xodimlar;

/**
 * XodimlarSearch represents the model behind the search form of `app\modules\control_university\models\Xodimlar`.
 */
class XodimlarSearch extends Xodimlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'bolimlar_id', 'lavozimlar_id', 'ish_jadvallari_id'], 'integer'],
            [['xodimID', 'ismi', 'tabel_nomer', 'cardNo', 'uy_manzil', 'tel_raqam', 'rasm'], 'safe'],
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
        $query = Xodimlar::find();

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
            'bolimlar_id' => $this->bolimlar_id,
            'lavozimlar_id' => $this->lavozimlar_id,
            'ish_jadvallari_id' => $this->ish_jadvallari_id,
        ]);

        $query->andFilterWhere(['like', 'xodimID', $this->xodimID])
            ->andFilterWhere(['like', 'ismi', $this->ismi])
            ->andFilterWhere(['like', 'tabel_nomer', $this->tabel_nomer])
            ->andFilterWhere(['like', 'cardNo', $this->cardNo])
            ->andFilterWhere(['like', 'uy_manzil', $this->uy_manzil])
            ->andFilterWhere(['like', 'tel_raqam', $this->tel_raqam])
            ->andFilterWhere(['like', 'rasm', $this->rasm]);

        return $dataProvider;
    }
}
