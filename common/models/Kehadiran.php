<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kehadiran".
 *
 * @property integer $kehadiran_id
 * @property integer $user_id
 * @property string $tanggal
 * @property integer $status
 * @property string $keterangan
 */
class Kehadiran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kehadiran';
    }

    /**
     * @inheritdoc
     */
    public $user;
    public function rules()
    {
        return [
           /// 'keterangan'], 'required'],
            [['user_id','mentor_id', 'status'], 'integer'],
            [['tanggal'], 'safe'],
            [['keterangan'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kehadiran_id' => 'Kehadiran ID',
            'user_id' => 'User ID',
            'tanggal' => 'Tanggal',
            'status' => 'Status',
            'keterangan' => 'Keterangan',
        ];
    }

     public function getAnggota()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
    }

    //status hadir
    public function Status($id)
    {
        switch ($id) {
            case '1':
                $id = 'Hadir';
                break;
            case '2':
                $id = 'Ijin';
                break;
            case '3':
                $id = 'Tanpa Keterangan';
                break;
            
            }
            return $id;
    }
}
