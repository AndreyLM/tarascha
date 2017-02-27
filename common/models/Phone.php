<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "phone".
 *
 * @property string $id
 * @property integer $position
 * @property integer $text
 */
class Phone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position', 'text'], 'required'],
            [['position'], 'integer'],
            [['text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position' => 'Позиція',
            'text' => 'Текст',
        ];
    }
}
