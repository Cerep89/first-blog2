<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\About;

/**
 * AboutSearch represents the model behind the search form about `common\models\About`.
 */
class AboutSearch extends About
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['about_title', 'about_text', 'about_left_item_img', 'about_left_item_title', 'about_left_item_text', 'about_center_item_img', 'about_center_item_title', 'about_center_item_text', 'about_right_item_img', 'about_right_item_title', 'about_right_item_text'], 'safe'],
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
        $query = About::find();

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

        $query->andFilterWhere(['like', 'about_title', $this->about_title])
            ->andFilterWhere(['like', 'about_text', $this->about_text])
            ->andFilterWhere(['like', 'about_left_item_img', $this->about_left_item_img])
            ->andFilterWhere(['like', 'about_left_item_title', $this->about_left_item_title])
            ->andFilterWhere(['like', 'about_left_item_text', $this->about_left_item_text])
            ->andFilterWhere(['like', 'about_center_item_img', $this->about_center_item_img])
            ->andFilterWhere(['like', 'about_center_item_title', $this->about_center_item_title])
            ->andFilterWhere(['like', 'about_center_item_text', $this->about_center_item_text])
            ->andFilterWhere(['like', 'about_right_item_img', $this->about_right_item_img])
            ->andFilterWhere(['like', 'about_right_item_title', $this->about_right_item_title])
            ->andFilterWhere(['like', 'about_right_item_text', $this->about_right_item_text]);

        return $dataProvider;
    }
}
