<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu_item".
 *
 * @property string $id
 * @property string $menu_id
 * @property string $title
 * @property string $description
 * @property string $type
 * @property string $categoryId_articleSlug
 * @property integer $position
 * @property integer $position2
 *
 * @property Menu $menu
 */
class MenuItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu_item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'title', 'type', 'position'], 'required'],
            [['menu_id', 'position', 'position2'], 'integer'],
            [['title', 'description', 'type', 'categoryId_articleSlug'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_id' => 'Меню',
            'title' => 'Пункт меню',
            'description' => 'Опис',
            'type' => 'Тип',
            'categoryId_articleSlug' => 'Id категорії, або lug статті',
            'position' => 'Позиція',
            'position2' => 'Position2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }
}
