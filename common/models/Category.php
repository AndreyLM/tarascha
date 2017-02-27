<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property string $category_id
 * @property string $parent_category_id
 * @property string $title
 * @property string $description
 * @property string $slug
 *
 * @property Article[] $articles
 * @property MainCategory $parentCategory
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_category_id'], 'integer'],
            [['title', 'description'], 'required'],
            [['title'], 'string', 'max' => 124],
            [['description'], 'string', 'max' => 264],
            [['slug'], 'string', 'max' => 256],
            [['parent_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => MainCategory::className(), 'targetAttribute' => ['parent_category_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'parent_category_id' => 'Головна категорія',
            'title' => 'Категорія',
            'description' => 'Опис',
            'slug' => 'Slug',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['category_id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentCategory()
    {
        return $this->hasOne(MainCategory::className(), ['id' => 'parent_category_id']);
    }
}
