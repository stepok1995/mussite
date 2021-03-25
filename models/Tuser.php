<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tuser".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $patronymic
 * @property string $login
 * @property string $password
 * @property string $e-mail
 * @property string $img
 */
class Tuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'patronymic', 'login', 'password', 'e-mail', 'img'], 'required'],
            [['first_name', 'last_name', 'patronymic', 'login', 'password', 'e-mail', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'patronymic' => 'Отчество',
            'login' => 'Логин',
            'password' => 'Пароль',
            'e-mail' => 'E-mail адрес',
            'img' => 'Img',
        ];
    }
}
