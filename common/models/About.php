<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property integer $id
 * @property string $about_title
 * @property string $about_text
 * @property string $about_left_item_img
 * @property string $about_left_item_title
 * @property string $about_left_item_text
 * @property string $about_center_item_img
 * @property string $about_center_item_title
 * @property string $about_center_item_text
 * @property string $about_right_item_img
 * @property string $about_right_item_title
 * @property string $about_right_item_text
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['about_title', 'about_text', 'about_left_item_img', 'about_left_item_title', 'about_left_item_text', 'about_center_item_img', 'about_center_item_title', 'about_center_item_text', 'about_right_item_img', 'about_right_item_title', 'about_right_item_text'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about_title' => 'About Title',
            'about_text' => 'About Text',
            'about_left_item_img' => 'About Left Item Img',
            'about_left_item_title' => 'About Left Item Title',
            'about_left_item_text' => 'About Left Item Text',
            'about_center_item_img' => 'About Center Item Img',
            'about_center_item_title' => 'About Center Item Title',
            'about_center_item_text' => 'About Center Item Text',
            'about_right_item_img' => 'About Right Item Img',
            'about_right_item_title' => 'About Right Item Title',
            'about_right_item_text' => 'About Right Item Text',
        ];
    }
}
