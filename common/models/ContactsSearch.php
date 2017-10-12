<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Contacts;

/**
 * ContactsSearch represents the model behind the search form about `common\models\Contacts`.
 */
class ContactsSearch extends Contacts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['contact_title', 'contact_text', 'contact_title_one', 'contact_text_one', 'contact_title_two', 'contact_text_two', 'contact_title_three', 'contact_text_three', 'contact_title_for', 'contact_text_for'], 'safe'],
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
        $query = Contacts::find();

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
        ]);

        $query->andFilterWhere(['like', 'contact_title', $this->contact_title])
            ->andFilterWhere(['like', 'contact_text', $this->contact_text])
            ->andFilterWhere(['like', 'contact_title_one', $this->contact_title_one])
            ->andFilterWhere(['like', 'contact_text_one', $this->contact_text_one])
            ->andFilterWhere(['like', 'contact_title_two', $this->contact_title_two])
            ->andFilterWhere(['like', 'contact_text_two', $this->contact_text_two])
            ->andFilterWhere(['like', 'contact_title_three', $this->contact_title_three])
            ->andFilterWhere(['like', 'contact_text_three', $this->contact_text_three])
            ->andFilterWhere(['like', 'contact_title_for', $this->contact_title_for])
            ->andFilterWhere(['like', 'contact_text_for', $this->contact_text_for]);

        return $dataProvider;
    }
}
