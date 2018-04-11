<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $phone
 * @property string $email
 * @property int $status
 * @property int $register_time 注册时间
 * @property int $register_ip 注册ip
 * @property int $last_login_time 上次登陆时间
 */
class UserModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'phone', 'email'], 'required'],
            [['phone', 'status', 'register_time', 'register_ip', 'last_login_time'], 'integer'],
            [['username', 'password', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'phone' => 'Phone',
            'email' => 'Email',
            'status' => 'Status',
            'register_time' => 'Register Time',
            'register_ip' => 'Register Ip',
            'last_login_time' => 'Last Login Time',
        ];
    }
}
