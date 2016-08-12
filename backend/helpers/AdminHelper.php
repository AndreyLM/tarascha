<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 12.08.2016
 * Time: 9:36
 */

namespace backend\helpers;


class AdminHelper
{
    public static function getCategories($parent_id)
    {
        $connection = \Yii::$app->db;
        $result = $connection->createCommand("SELECT * FROM category where parent_category_id=:par_cat_id")
            ->bindValue(':par_cat_id', $parent_id)->queryAll();
        $category = [];
        $return = [];
        if ($result != NULL) {
            foreach($result as $row)
            {
                $category['category_id']=$row['category_id'];
                $category['title']=$row['title'];
                $category['parent_category_id']=$row['parent_category_id'];
                $category['description']=$row['description'];
                $category['subCategories'] = static::getCategories($row['category_id']);
                $return[$row['category_id']]=$category;
            }
        }

        return $return;
    }

}