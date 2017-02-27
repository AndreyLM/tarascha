<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property string $id
 * @property string $title
 * @property string $value
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'value'], 'required'],
            [['title', 'value'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Назва',
            'value' => 'Значення',
        ];
    }
}
