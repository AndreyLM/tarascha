<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "legal_documents".
 *
 * @property string $id
 * @property string $title
 * @property string $type
 * @property integer $year
 * @property integer $month
 */
class LegalDocuments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'legal_documents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'type', 'year', 'month'], 'required'],
            [['year', 'month'], 'integer'],
            [['title'], 'string', 'max' => 256],
            [['type'], 'string', 'max' => 64],
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
            'type' => 'Type',
            'year' => 'Year',
            'month' => 'Month',
        ];
    }
}
