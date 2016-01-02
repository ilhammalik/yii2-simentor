<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DafTugas;

/**
 * DafTugasSearch represents the model behind the search form about `\common\models\DafTugas`.
 */
class DafTugasSearch extends DafTugas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tugas', 'status'], 'integer'],
            [['desc', 'url'], 'safe'],
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
        $query = DafTugas::find();

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
            'id_tugas' => $this->id_tugas,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
