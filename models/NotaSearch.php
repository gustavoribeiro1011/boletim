<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nota;

/**
 * NotaSearch represents the model behind the search form about `app\models\Nota`.
 */
class NotaSearch extends Nota
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nota'], 'integer'],
            [['materia'], 'safe'],
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
        $query = Nota::find();

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
            'nota' => $this->nota,
        ]);

        $query->andFilterWhere(['like', 'materia', $this->materia]);

        return $dataProvider;
    }
}
