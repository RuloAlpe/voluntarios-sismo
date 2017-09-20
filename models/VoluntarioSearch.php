<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EntVoluntario;

/**
 * VoluntarioSearch represents the model behind the search form about `app\models\EntVoluntario`.
 */
class VoluntarioSearch extends EntVoluntario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_voluntario', 'id_localidad'], 'integer'],
            [['txt_nombre_completo', 'txt_email'], 'safe'],
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
        $query = EntVoluntario::find();

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
            'id_voluntario' => $this->id_voluntario,
            'id_localidad' => $this->id_localidad,
        ]);

        $query->andFilterWhere(['like', 'txt_nombre_completo', $this->txt_nombre_completo])
            ->andFilterWhere(['like', 'txt_email', $this->txt_email]);

        return $dataProvider;
    }
}
