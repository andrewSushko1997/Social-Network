<?php
/**
 * Created by PhpStorm.
 * User: sushko
 * Date: 2/19/2018
 * Time: 4:24 PM
 */

namespace app\models;

use yii\db\ActiveRecord;

class SignupForm extends ActiveRecord
{

    public $username;
    public $password;

    public function rules()
    {
        return [
            [['username', 'password'], 'required', 'message' => 'Заполните поле'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
        ];
    }
}