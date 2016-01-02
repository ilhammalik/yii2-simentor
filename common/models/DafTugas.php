<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "daf_tugas".
 *
 * @property integer $id_tugas
 * @property string $desc
 * @property string $url
 * @property integer $status
 */
class DafTugas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daf_tugas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc', 'url', 'status'], 'required'],
            [['desc', 'url'], 'string'],
            [['status'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tugas' => Yii::t('app', 'Id Tugas'),
            'desc' => Yii::t('app', 'Desc'),
            'url' => Yii::t('app', 'Url'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
