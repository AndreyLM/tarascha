<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "article".
 *
 * @property string $id
 * @property string $title
 * @property string $category_id
 * @property string $slug
 * @property string $img
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
            [['category_id', 'intro_text', 'isActive', 'isFavorite', 'title'], 'required'],
            [['category_id', 'isActive', 'isFavorite'], 'integer'],
            [['intro_text', 'full_text', 'title'], 'string'],
            [['created_at'], 'safe'],
            [['tags'], 'string', 'max' => 255],
            [['img'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'category_id']],
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
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'created_at',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'updated_at',
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Категорія',
            'slug' => 'Slug',
            'img' => 'Зображення',
            'intro_text' => 'Intro Text',
            'full_text' => 'Повний текст',
            'tags' => 'Теги',
            'created_at' => 'Дата створення',
            'updated_at' => 'Дата публікації',
            'isActive' => 'Опублікувати ',
            'isFavorite' => 'Відобразити на головній сторінці',
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
