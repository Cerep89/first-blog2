<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Index;

/**
 * IndexSearch represents the model behind the search form about `common\models\Index`.
 */
class IndexSearch extends Index
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'three_year', 'three_proiect_one_number', 'three_proiect_two_number', 'three_proiect_three_number'], 'integer'],
            [['first_image_left', 'first_title_left', 'first_text_left', 'first_image_center', 'first_title_center', 'first_text_center', 'first_image_right', 'first_title_right', 'first_text_right', 'two_title_left', 'two_button_left', 'two_button_link_left', 'two_text_center', 'two_title_right', 'two_text_link_one_right', 'two_link_one_right', 'two_text_link_two_right', 'two_link_two_right', 'two_text_link_three_right', 'two_link_three_right', 'three_background', 'three_title', 'three_text', 'three_proiect_one_title', 'three_proiect_one_text', 'three_proiect_two_title', 'three_proiect_two_text', 'three_proiect_three_title', 'three_proiect_three_text', 'for_background', 'for_title', 'for_one_item_title', 'for_one_item_text', 'for_two_item_title', 'for_two_item_text', 'for_three_item_title', 'for_three_item_text', 'for_for_item_title', 'for_for_item_text', 'for_for_image_right', 'five_image_left', 'five_title_right', 'five_text_right', 'five_button_right', 'five_button_link_right'], 'safe'],
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
        $query = Index::find();

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
            'three_year' => $this->three_year,
            'three_proiect_one_number' => $this->three_proiect_one_number,
            'three_proiect_two_number' => $this->three_proiect_two_number,
            'three_proiect_three_number' => $this->three_proiect_three_number,
        ]);

        $query->andFilterWhere(['like', 'first_image_left', $this->first_image_left])
            ->andFilterWhere(['like', 'first_title_left', $this->first_title_left])
            ->andFilterWhere(['like', 'first_text_left', $this->first_text_left])
            ->andFilterWhere(['like', 'first_image_center', $this->first_image_center])
            ->andFilterWhere(['like', 'first_title_center', $this->first_title_center])
            ->andFilterWhere(['like', 'first_text_center', $this->first_text_center])
            ->andFilterWhere(['like', 'first_image_right', $this->first_image_right])
            ->andFilterWhere(['like', 'first_title_right', $this->first_title_right])
            ->andFilterWhere(['like', 'first_text_right', $this->first_text_right])
            ->andFilterWhere(['like', 'two_title_left', $this->two_title_left])
            ->andFilterWhere(['like', 'two_button_left', $this->two_button_left])
            ->andFilterWhere(['like', 'two_button_link_left', $this->two_button_link_left])
            ->andFilterWhere(['like', 'two_text_center', $this->two_text_center])
            ->andFilterWhere(['like', 'two_title_right', $this->two_title_right])
            ->andFilterWhere(['like', 'two_text_link_one_right', $this->two_text_link_one_right])
            ->andFilterWhere(['like', 'two_link_one_right', $this->two_link_one_right])
            ->andFilterWhere(['like', 'two_text_link_two_right', $this->two_text_link_two_right])
            ->andFilterWhere(['like', 'two_link_two_right', $this->two_link_two_right])
            ->andFilterWhere(['like', 'two_text_link_three_right', $this->two_text_link_three_right])
            ->andFilterWhere(['like', 'two_link_three_right', $this->two_link_three_right])
            ->andFilterWhere(['like', 'three_background', $this->three_background])
            ->andFilterWhere(['like', 'three_title', $this->three_title])
            ->andFilterWhere(['like', 'three_text', $this->three_text])
            ->andFilterWhere(['like', 'three_proiect_one_title', $this->three_proiect_one_title])
            ->andFilterWhere(['like', 'three_proiect_one_text', $this->three_proiect_one_text])
            ->andFilterWhere(['like', 'three_proiect_two_title', $this->three_proiect_two_title])
            ->andFilterWhere(['like', 'three_proiect_two_text', $this->three_proiect_two_text])
            ->andFilterWhere(['like', 'three_proiect_three_title', $this->three_proiect_three_title])
            ->andFilterWhere(['like', 'three_proiect_three_text', $this->three_proiect_three_text])
            ->andFilterWhere(['like', 'for_background', $this->for_background])
            ->andFilterWhere(['like', 'for_title', $this->for_title])
            ->andFilterWhere(['like', 'for_one_item_title', $this->for_one_item_title])
            ->andFilterWhere(['like', 'for_one_item_text', $this->for_one_item_text])
            ->andFilterWhere(['like', 'for_two_item_title', $this->for_two_item_title])
            ->andFilterWhere(['like', 'for_two_item_text', $this->for_two_item_text])
            ->andFilterWhere(['like', 'for_three_item_title', $this->for_three_item_title])
            ->andFilterWhere(['like', 'for_three_item_text', $this->for_three_item_text])
            ->andFilterWhere(['like', 'for_for_item_title', $this->for_for_item_title])
            ->andFilterWhere(['like', 'for_for_item_text', $this->for_for_item_text])
            ->andFilterWhere(['like', 'for_for_image_right', $this->for_for_image_right])
            ->andFilterWhere(['like', 'five_image_left', $this->five_image_left])
            ->andFilterWhere(['like', 'five_title_right', $this->five_title_right])
            ->andFilterWhere(['like', 'five_text_right', $this->five_text_right])
            ->andFilterWhere(['like', 'five_button_right', $this->five_button_right])
            ->andFilterWhere(['like', 'five_button_link_right', $this->five_button_link_right]);

        return $dataProvider;
    }
}
