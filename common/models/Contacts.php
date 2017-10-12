<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $contact_title
 * @property string $contact_text
 * @property string $contact_title_one
 * @property string $contact_text_one
 * @property string $contact_title_two
 * @property string $contact_text_two
 * @property string $contact_title_three
 * @property string $contact_text_three
 * @property string $contact_title_for
 * @property string $contact_text_for
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_title', 'contact_text', 'contact_title_one', 'contact_text_one', 'contact_title_two', 'contact_text_two', 'contact_title_three', 'contact_text_three', 'contact_title_for', 'contact_text_for'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contact_title' => 'Contact Title',
            'contact_text' => 'Contact Text',
            'contact_title_one' => 'Contact Title One',
            'contact_text_one' => 'Contact Text One',
            'contact_title_two' => 'Contact Title Two',
            'contact_text_two' => 'Contact Text Two',
            'contact_title_three' => 'Contact Title Three',
            'contact_text_three' => 'Contact Text Three',
            'contact_title_for' => 'Contact Title For',
            'contact_text_for' => 'Contact Text For',
        ];
    }
}
