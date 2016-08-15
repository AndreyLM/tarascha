<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "category".
 *
 * @property string $category_id
 * @property integer $parent_category_id
 * @property string $title
 * @property string $description
 * @property string $slug
 *
 * @property Article[] $articles
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
            [['parent_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(),
                'targetAttribute' => ['parent_category_id' =>'category_id']],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug',
                'immutable' => true,
                'ensureUnique'=>true,
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'parent_category_id' => 'Parent Category ID',
            'title' => 'Title',
            'description' => 'Description',
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
}
