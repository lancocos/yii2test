<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "goods".
 *
 * @property int $id
 * @property string $name
 * @property int $cover_id
 * @property int $category_id
 * @property int $branch_id
 * @property string $price
 * @property int $views
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Goods extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'cover_id', 'category_id', 'branch_id', 'price', 'views', 'status', 'created_at'], 'required'],
            [['cover_id', 'category_id', 'branch_id', 'views', 'status'], 'integer'],
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cover_id' => 'Cover ID',
            'category_id' => 'Category ID',
            'branch_id' => 'Branch ID',
            'price' => 'Price',
            'views' => 'Views',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
