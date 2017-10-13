<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "index".
 *
 * @property integer $id
 * @property string $first_image_left
 * @property string $first_title_left
 * @property string $first_text_left
 * @property string $first_image_center
 * @property string $first_title_center
 * @property string $first_text_center
 * @property string $first_image_right
 * @property string $first_title_right
 * @property string $first_text_right
 * @property string $two_title_left
 * @property string $two_button_left
 * @property string $two_button_link_left
 * @property string $two_text_center
 * @property string $two_title_right
 * @property string $two_text_link_one_right
 * @property string $two_link_one_right
 * @property string $two_text_link_two_right
 * @property string $two_link_two_right
 * @property string $two_text_link_three_right
 * @property string $two_link_three_right
 * @property string $three_background
 * @property string $three_title
 * @property integer $three_year
 * @property string $three_text
 * @property integer $three_proiect_one_number
 * @property string $three_proiect_one_title
 * @property string $three_proiect_one_text
 * @property integer $three_proiect_two_number
 * @property string $three_proiect_two_title
 * @property string $three_proiect_two_text
 * @property integer $three_proiect_three_number
 * @property string $three_proiect_three_title
 * @property string $three_proiect_three_text
 * @property string $for_background
 * @property string $for_title
 * @property string $for_one_item_title
 * @property string $for_one_item_text
 * @property string $for_two_item_title
 * @property string $for_two_item_text
 * @property string $for_three_item_title
 * @property string $for_three_item_text
 * @property string $for_for_item_title
 * @property string $for_for_item_text
 * @property string $for_for_image_right
 * @property string $five_image_left
 * @property string $five_title_right
 * @property string $five_text_right
 * @property string $five_button_right
 * @property string $five_button_link_right
 */
class Index extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'index';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['three_year', 'three_proiect_one_number', 'three_proiect_two_number', 'three_proiect_three_number'], 'integer'],
            [['first_image_left', 'first_title_left', 'first_text_left', 'first_image_center', 'first_title_center', 'first_text_center', 'first_image_right', 'first_title_right', 'first_text_right', 'two_title_left', 'two_button_left', 'two_button_link_left', 'two_text_center', 'two_title_right', 'two_text_link_one_right', 'two_link_one_right', 'two_text_link_two_right', 'two_link_two_right', 'two_text_link_three_right', 'two_link_three_right', 'three_background', 'three_title', 'three_text', 'three_proiect_one_title', 'three_proiect_one_text', 'three_proiect_two_title', 'three_proiect_two_text', 'three_proiect_three_title', 'three_proiect_three_text', 'for_background', 'for_title', 'for_one_item_title', 'for_one_item_text', 'for_two_item_title', 'for_two_item_text', 'for_three_item_title', 'for_three_item_text', 'for_for_item_title', 'for_for_item_text', 'for_for_image_right', 'five_image_left', 'five_title_right', 'five_text_right', 'five_button_right', 'five_button_link_right'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_image_left' => 'First Image Left',
            'first_title_left' => 'First Title Left',
            'first_text_left' => 'First Text Left',
            'first_image_center' => 'First Image Center',
            'first_title_center' => 'First Title Center',
            'first_text_center' => 'First Text Center',
            'first_image_right' => 'First Image Right',
            'first_title_right' => 'First Title Right',
            'first_text_right' => 'First Text Right',
            'two_title_left' => 'Two Title Left',
            'two_button_left' => 'Two Button Left',
            'two_button_link_left' => 'Two Button Link Left',
            'two_text_center' => 'Two Text Center',
            'two_title_right' => 'Two Title Right',
            'two_text_link_one_right' => 'Two Text Link One Right',
            'two_link_one_right' => 'Two Link One Right',
            'two_text_link_two_right' => 'Two Text Link Two Right',
            'two_link_two_right' => 'Two Link Two Right',
            'two_text_link_three_right' => 'Two Text Link Three Right',
            'two_link_three_right' => 'Two Link Three Right',
            'three_background' => 'Three Background',
            'three_title' => 'Three Title',
            'three_year' => 'Three Year',
            'three_text' => 'Three Text',
            'three_proiect_one_number' => 'Three Proiect One Number',
            'three_proiect_one_title' => 'Three Proiect One Title',
            'three_proiect_one_text' => 'Three Proiect One Text',
            'three_proiect_two_number' => 'Three Proiect Two Number',
            'three_proiect_two_title' => 'Three Proiect Two Title',
            'three_proiect_two_text' => 'Three Proiect Two Text',
            'three_proiect_three_number' => 'Three Proiect Three Number',
            'three_proiect_three_title' => 'Three Proiect Three Title',
            'three_proiect_three_text' => 'Three Proiect Three Text',
            'for_background' => 'For Background',
            'for_title' => 'For Title',
            'for_one_item_title' => 'For One Item Title',
            'for_one_item_text' => 'For One Item Text',
            'for_two_item_title' => 'For Two Item Title',
            'for_two_item_text' => 'For Two Item Text',
            'for_three_item_title' => 'For Three Item Title',
            'for_three_item_text' => 'For Three Item Text',
            'for_for_item_title' => 'For For Item Title',
            'for_for_item_text' => 'For For Item Text',
            'for_for_image_right' => 'For For Image Right',
            'five_image_left' => 'Five Image Left',
            'five_title_right' => 'Five Title Right',
            'five_text_right' => 'Five Text Right',
            'five_button_right' => 'Five Button Right',
            'five_button_link_right' => 'Five Button Link Right',
        ];
    }

    public function saveImage($filename)
    {
        $this->first_image_left = $filename;
        return $this->save(false);
    }

    public function getImage()
    {
        return ($this->first_image_left) ? '/uploads/' . $this->first_image_left : '/no-image.png';

        /* то же самое
         if($this->image)
        {
            return '/upoads/' . $this->image;
        }
        return '/no-image.png';*/
    }

    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->first_image_left);
    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }
}
