<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ttype".
 *
 * @property int $id
 * @property string $name
 *
 * @property Tproduct[] $tproducts
 */
class Ttype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ttype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название типа',
        ];
    }

    /**
     * Gets query for [[Tproducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTproducts()
    {
        return $this->hasMany(Tproduct::className(), ['type' => 'id']);
    }
}
