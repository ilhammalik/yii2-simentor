<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Penilaian;

/**
 * PenilaianSearch represents the model behind the search form about `\common\models\Penilaian`.
 */
class PenilaianSearch extends Penilaian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['penilaian_id', 'user_id', 'tugas', 'hafalan', 'pemahaman', 'keaktifan', 'total_nilai'], 'integer'],
            [['keterangan'], 'safe'],
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
        $query = Penilaian::find();

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
            'penilaian_id' => $this->penilaian_id,
            'user_id' => $this->user_id,
            'tugas' => $this->tugas,
            'hafalan' => $this->hafalan,
            'pemahaman' => $this->pemahaman,
            'keaktifan' => $this->keaktifan,
            'total_nilai' => $this->total_nilai,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
