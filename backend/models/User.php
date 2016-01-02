<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $nim
 * @property string $prodi
 * @property integer $telepon
 * @property integer $status_pengguna
 * @property string $full_name
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public $password;
    public function rules()
    {
        return [
            [['username', 'email', 'nim', 'prodi', 'telepon', 'status_pengguna', 'full_name'], 'required'],
            [['status', 'nim', 'telepon', 'status_pengguna'], 'integer'],
            [['username','email'], 'string', 'max' => 255],
            [['prodi'], 'string', 'max' => 10],
            [['full_name'], 'string', 'max' => 30],
            [['username'], 'unique'],
            [['email'], 'email'],
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
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'nim' => 'Nim',
            'prodi' => 'Prodi',
            'telepon' => 'Telepon',
            'status_pengguna' => 'Status Pengguna',
            'full_name' => 'Full Name',
        ];
    }
}
