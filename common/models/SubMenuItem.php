<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sub_menu_item".
 *
 * @property string $id
 * @property string $parent_menu_item
 * @property string $title
 * @property string $type
 * @property string $categoryId_articleSlug
 */
class SubMenuItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_menu_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_menu_item', 'title', 'type'], 'required'],
            [['parent_menu_item'], 'integer'],
            [['title', 'type', 'categoryId_articleSlug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_menu_item' => 'Головне меню',
            'title' => 'Назва',
            'type' => 'Тип',
            'categoryId_articleSlug' => 'Категорія, стаття',
        ];
    }
}
