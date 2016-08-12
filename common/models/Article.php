<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property string $id
 * @property string $category_id
 * @property string $slug
 * @property string $intro_text
 * @property string $full_text
 * @property string $tags
 * @property string $created_at
 * @property string $updated_at
 * @property integer $isActive
 * @property integer $isFavorite
 *
 * @property Category $category
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'intro_text', 'created_at', 'updated_at', 'isActive', 'isFavorite'], 'required'],
            [['category_id', 'isActive', 'isFavorite'], 'integer'],
            [['intro_text', 'full_text'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['slug', 'tags'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'category_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'slug' => 'Slug',
            'intro_text' => 'Intro Text',
            'full_text' => 'Full Text',
            'tags' => 'Tags',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'isActive' => 'Is Active',
            'isFavorite' => 'Is Favorite',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
}
