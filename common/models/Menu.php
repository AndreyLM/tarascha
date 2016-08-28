<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $type
 * @property string $categoryId_articleSlug
 * @property integer $position
 *
 * @property MenuItem[] $menuItems
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'type'], 'required'],
            [['position'], 'integer'],
            [['title', 'description', 'type', 'categoryId_articleSlug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Меню',
            'description' => 'Description',
            'type' => 'Type',
            'categoryId_articleSlug' => 'Category Id Article Slug',
            'position' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuItems()
    {
        return $this->hasMany(MenuItem::className(), ['menu_id' => 'id']);
    }
}
