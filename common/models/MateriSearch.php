<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Materi;

/**
 * MateriSearch represents the model behind the search form about `common\models\Materi`.
 */
class MateriSearch extends Materi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_materi', 'user_id', 'status'], 'integer'],
            [['judul', 'links',  'tgl_input'], 'safe'],
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
        $query = Materi::find();

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
            'id_materi' => $this->id_materi,
            'user_id' => $this->user_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'links', $this->links])
            ->andFilterWhere(['like', 'tgl_input', $this->tgl_input]);

        return $dataProvider;
    }
}
