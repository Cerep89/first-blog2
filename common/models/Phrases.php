<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "phrases".
 *
 * @property integer $id
 * @property string $phrases_title_
 * @property string $phrases_text
 * @property string $phrases_author
 */
class Phrases extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phrases';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phrases_title_', 'phrases_text', 'phrases_author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phrases_title_' => 'Phrases Title',
            'phrases_text' => 'Phrases Text',
            'phrases_author' => 'Phrases Author',
        ];
    }
}
