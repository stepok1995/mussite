<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tnew".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $img
 */
class Tnew extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tnew';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'img'], 'required'],
            [['title', 'text'], 'string'],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст новости',
            'img' => 'Картинка',
        ];
    }
}
