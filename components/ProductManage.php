<?php

namespace app\components;

use app\models\Payment;
use app\models\Product;

use yii\console\Application;
use yii\httpclient\Client;
use yii\base\Component;
use yii\db\Expression;
use DateTime;
use Yii;

class ProductManage extends Component
{
    public function getPayment($id, $qty)
    {
        $product = Product::find()->where(['id'=> $id])->one();
        // die(var_dump($product));
        if ($product->quantity < $qty) {
            return 2;

        } else{
            $product->quantity =  $product->quantity - $qty;
            // $model = new Product();
            $product->quantity = $product->quantity;
            $product->save(false);
            return 1;
        }

        
    }
}
