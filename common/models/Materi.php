<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "materi".
 *
 * @property integer $id_materi
 * @property string $judul
 * @property string $links
 * @property string $file
 * @property string $tgl_input
 * @property integer $user_id
 * @property integer $status
 */
class Materi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['judul', 'links', 'tgl_input', 'user_id', 'status'], 'required'],
            [['judul', 'links'], 'string'],
            [['user_id', 'status'], 'integer'],
            [['tgl_input'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_materi' => Yii::t('app', 'Id Materi'),
            'judul' => Yii::t('app', 'Judul'),
            'links' => Yii::t('app', 'Links'),
            'tgl_input' => Yii::t('app', 'Tgl Input'),
            'user_id' => Yii::t('app', 'User ID'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
