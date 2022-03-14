<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
// use kartik\select2\Select2;
use app\models\Location;
use app\models\Product;
use yii\helpers\Url;
use yii\web\View;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\Payment */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="payment-form">
<div class="box box-default" style="margin-top: 25px; background-color:#eeeeee;">
<?php $form = ActiveForm::begin(); ?>

    <div class="row" style="margin: 1em; ">

        <div class="col-xl-6 col-lg-6 col-md-6">
            <?= $form->field($model, 'fullname')->textInput(['id'=>'fullname', 'maxlength' => true,]) ?>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6">
            <?= $form->field($model, 'quantity')->textInput(['id'=>'quantity']);
                // echo(Yii::getAlias("@web")); ?>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6">
            <?= $form->field($model, 'location_id')->dropDownList(
                ArrayHelper::map(Location::find()->all(),'id','ward'),
                ['prompt' => 'Select Location'],
                ['options' => ['id' => 'location_id']],
                ); 
                // echo(Yii::getAlias("@webroot"));
            ?>
        </div>

    
        <div class="col-xl-6 col-lg-6 col-md-6">
            <?= $form->field($model, 'unit_price')->textInput(['id'=>'unit_price'])?> 
        </div>
    </div>


    <div class="row" style="margin: 1em; ">

        <div class="col-xl-6 col-lg-6 col-md-6">
        <?= $form->field($model, 'phone')->textInput(['id'=>'phone','maxlength' => true]) ?>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6">
            <?= $form->field($model, 'price')->textInput(['id'=>'price'])?> 
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6">
            <?= $form->field($model, 'product_id')->dropdownList(
                ArrayHelper::map(Product::find()->select(['id','concat(name,\' - \',selling_price) as name'])->all(),'id','name'),
                [
                    'prompt' => 'Select Product',
                    ['options' => ['id' => 'product_id']],

                    // 'onchange' => 'alert("OK")'
                    //     'onchange' => 'new JsExpression(function(event) => {
                    //     console.log("Anonimous Fun: c", event);
                    //     let price = $(this).text().split(" - ")[1];
                    //     console.log("Getting price: ", price);
                    //     $(#unit_price).val(price);
                    // })'
                    // 'onchange' => 'setUnitPriceBasedOnSelectedProduct($(this).text())'
                ]);
            ?>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 pull-right" style="margin-top: 1.8em; ">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            <?= Html::resetButton(Yii::t('app', 'Reset'), ['id' => 'resetButton', 'class' => 'btn btn-default']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>

 <?php
$js = <<< JS
// setUnitPriceBasedOnSelectedProduct(option){
//     console.log("Getting price");
//     let price = option.split(" - ")[1];
//     $(#unit_price).val();
// }
$(document).ready(function(){
    $("#quantity").keyup(function(){
        var unit_value = $("#unit_price").val(); 
        var qty_value = $("#quantity").val(); 
        var total=Number(unit_value) * Number(qty_value);
        $("#price").val(total);

        console.log("Hi there");
    });

    
})
JS;
$this->registerJs($js, View::POS_READY);
 
    
// $this->registerJs($js, \yii\web\View::POS_READY, 'my-options');


// var product_id = $(\"#product_id option:selected\").product_id();
// $(\"#unit_price\").val(product_id);

// $("#product_id").change(function(){
//     var product_id = $("#product_id").val(); 
//     $("#unit_price").val(product_id);
// });

?>
<script src="/honor/web/dist/js/jquery.js" type="text/javascript"></script>
<script>

    $(document).ready(function(){
    $("#quantity").keyup(function(){
        var unit_value = $("#unit_price").val(); 
        var qty_value = $("#quantity").val(); 
        var total=Number(unit_value) * Number(qty_value);
        $("#price").val(total);

        console.log("Hi there");
    });
});
    
</script>