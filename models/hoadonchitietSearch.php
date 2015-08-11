<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\hoadonchitiet;

/**
 * hoadonchitietSearch represents the model behind the search form about `app\models\hoadonchitiet`.
 */
class hoadonchitietSearch extends hoadonchitiet
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_hd', 'id_sanpham', 'soluong', 'status'], 'integer'],
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
        $query = hoadonchitiet::find();

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
            'id_hd' => $this->id_hd,
            'id_sanpham' => $this->id_sanpham,
            'soluong' => $this->soluong,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
