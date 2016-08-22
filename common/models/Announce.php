<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "announce".
 *
 * @property integer $id
 * @property string $title
 * @property integer $article_id
 */
class Announce extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announce';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'article_id'], 'required'],
            [['id', 'article_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'article_id' => 'Article ID',
        ];
    }
}
