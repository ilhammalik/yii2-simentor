<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "penilaian".
 *
 * @property integer $penilaian_id
 * @property integer $user_id
 * @property integer $tugas
 * @property integer $hafalan
 * @property integer $pemahaman
 * @property integer $keaktifan
 * @property integer $total_nilai
 * @property string $keterangan
 */
class Penilaian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penilaian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           /// [['user_id', 'tugas', 'hafalan', 'pemahaman', 'keaktifan', 'total_nilai', 'keterangan'], 'required'],
            [['user_id', 'tugas', 'hafalan'], 'string'],
           // [['keterangan'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'penilaian_id' => 'Penilaian ID',
            'user_id' => 'User ID',
            'tugas' => 'Tugas',
            'hafalan' => 'Hafalan',
            'pemahaman' => 'Pemahaman',
            'keaktifan' => 'Keaktifan',
            'total_nilai' => 'Total Nilai',
            'keterangan' => 'Keterangan',
        ];
    }

public function getAnggota()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
    }
}