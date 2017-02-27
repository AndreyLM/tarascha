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
            'description' => 'Опис',
            'type' => 'Тип',
            'categoryId_articleSlug' => 'Категорія чи стаття (slug/id)',
            'position' => 'Позиція',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenuItems()
    {
        return $this->hasMany(MenuItem::className(), ['menu_id' => 'id']);
    }

    public function testing() {
        $this->getMenuItems()->where(['position'=>1])->orderBy('position2')->all();
    }
}
