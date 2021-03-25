<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tproduct".
 *
 * @property int $id
 * @property string $name
 * @property int $cost
 * @property int $availability
 * @property string $img
 * @property int $type
 *
 * @property Ttype $type0
 */
class Tproduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tproduct';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'cost', 'availability', 'img', 'type'], 'required'],
            [['cost', 'availability', 'type'], 'integer'],
            [['name', 'img'], 'string', 'max' => 255],
            [['type'], 'exist', 'skipOnError' => true, 'targetClass' => Ttype::className(), 'targetAttribute' => ['type' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название изделия',
            'cost' => 'Цена',
            'availability' => 'Наличие',
            'img' => 'Картинка',
            'type' => 'Тип изделия',
        ];
    }

    /**
     * Gets query for [[Type0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType0()
    {
        return $this->hasOne(Ttype::className(), ['id' => 'type']);
    }
}
