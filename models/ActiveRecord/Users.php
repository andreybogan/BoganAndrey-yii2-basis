<?php

namespace app\models\ActiveRecord;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $first_name
 * @property string $second_name
 * @property string $login
 * @property string $password
 * @property string $email
 */
class Users extends ActiveRecord
{
    const SCENARIO_AUTH = 'auth';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'second_name', 'login', 'password', 'email'], 'required'],
            [['first_name', 'second_name', 'login'], 'string', 'max' => 56],
            [['password', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'second_name' => 'Second Name',
            'login' => 'Login',
            'password' => 'Password',
            'email' => 'Email',
        ];
    }

    /**
     * @return array|false
     */
    public function fields()
    {
        if ($this->scenario == self::SCENARIO_AUTH) {
            return [
                'id',
                'username' => 'login',
                'password',
            ];
        }
        return parent::fields();
    }
}
