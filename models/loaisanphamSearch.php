<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\loaisanpham;

/**
 * loaisanphamSearch represents the model behind the search form about `app\models\loaisanpham`.
 */
class loaisanphamSearch extends loaisanpham
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['ten_loai'], 'safe'],
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
        $query = loaisanpham::find();

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
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'ten_loai', $this->ten_loai]);

        return $dataProvider;
    }
}
