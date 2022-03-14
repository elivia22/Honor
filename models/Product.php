<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $quantity
 * @property float $cost_price
 * @property float $selling_price
 * @property int $category_id
 * @property int $supplier_id
 * @property string $date
 * @property string $expiry_date

 *
 * @property ProductCategory $category
 * @property Supplier $supplier
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'quantity', 'cost_price', 'selling_price', 'category_id', 'supplier_id','expiry_date'], 'required'],
            [['quantity', 'category_id', 'supplier_id'], 'integer'],
            [['selling_price', 'cost_price'], 'number'],
            [['name','date','expiry_date'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 100],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'id']],
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
            'description' => 'Description',
            'quantity' => 'Quantity',
            'selling_price' => 'Price',
            'cost_price' => 'Cost',
            'category_id' => 'Category',
            'supplier_id' => 'Supplier',
            'date' => 'Date',
            'expiry_date' => 'Expiry Date',

        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ProductCategory::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Supplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id' => 'supplier_id']);
    }
}
