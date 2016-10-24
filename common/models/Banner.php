<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property string $id
 * @property string $link
 * @property string $img
 * @property integer $position
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link', 'img', 'position'], 'required'],
            [['position'], 'integer'],
            [['link', 'img'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Link',
            'img' => 'Img',
            'position' => 'Position',
        ];
    }
}
