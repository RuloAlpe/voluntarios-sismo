<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EntNecesidades;

/**
 * NecesidadesSearch represents the model behind the search form about `app\models\EntNecesidades`.
 */
class NecesidadesSearch extends EntNecesidades
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_necesidad', 'id_localidad', 'id_voluntario', 'num_elementos'], 'integer'],
            [['txt_necesidad'], 'safe'],
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
        $query = EntNecesidades::find();

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
            'id_necesidad' => $this->id_necesidad,
            'id_localidad' => $this->id_localidad,
            'id_voluntario' => $this->id_voluntario,
            'num_elementos' => $this->num_elementos,
        ]);

        $query->andFilterWhere(['like', 'txt_necesidad', $this->txt_necesidad]);

        return $dataProvider;
    }
}
