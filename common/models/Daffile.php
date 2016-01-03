<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dapfile".
 *
 * @property integer $file_id
 * @property integer $nama
 */
class Daffile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dapfile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['nama'], 'required'],

            [['materi_id'], 'integer'],
            [['nama'], 'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'file_id' => Yii::t('app', 'File ID'),
            'nama' => Yii::t('app', 'Nama'),
        ];
    }
}
