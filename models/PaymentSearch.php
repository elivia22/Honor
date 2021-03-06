<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payment;

/**
 * PaymentSearch represents the model behind the search form of `app\models\Payment`.
 */
class PaymentSearch extends Payment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'location_id', 'quantity', 'product_id','price','unit_price'], 'integer'],
            [['fullname', 'phone', 'date'], 'safe'],
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
        $query = Payment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
             ],
             'sort'=> ['defaultOrder' => ['date'=>SORT_DESC]]
        ]);

        // $dataProvider->sort->attributes['Payment'] = [
        //     // 'asc' => ['tbl_city.name' => SORT_ASC],
        //     // 'asc' => ['date' => SORT_ASC],
        //     'desc' => ['date' => SORT_DESC],
        // ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'location_id' => $this->location_id,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'product_id', $this->product])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'unit_price', $this->unit_price]);


        return $dataProvider;
    }
}
