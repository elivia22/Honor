<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property string $fullname
 * @property string $product_id
 * @property string $phone
 * @property string $date
 * @property int $location_id
 * @property int $quantity
 * @property int $price
 * @property int $unit_price
 *
 * @property Location $location
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'product_id', 'phone', 'location_id', 'quantity','price','unit_price'], 'required'],
            [['location_id', 'quantity', 'product_id','price','unit_price'], 'integer'],
            [['fullname', 'date'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 20],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'product_id' => 'Product',
            'phone' => 'Phone',
            'location_id' => 'Location',
            'quantity' => 'Quantity',
            'price' => 'Total Price',
            'unit_price' => 'Unit Price',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
