<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Supplier;
use app\models\ProductCategory;
use kartik\date\DatePicker;
// use yii\bootstrap4\Modal;




/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

<div class="box box-default" style="margin-top: 25px; background-color:#eeeeee;">
    <!-- <div class="box-header" style="background-color:#efefef;"> -->

    <?php $form = ActiveForm::begin(); ?>

        <div class="row" style="margin: 1em; ">

            <div class="col-xl-6 col-lg-6 col-md-6">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6">
            <?= $form->field($model, 'quantity')->textInput() ?>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6">
        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
            
        <div class="col-xl-6 col-lg-6 col-md-6">
                <?= $form->field($model, 'selling_price')->textInput(['maxlength' => true]) ?>
        </div>
        
    </div>

    <div class="row" style="margin: 1em; ">

    <div class="col-xl-6 col-lg-6 col-md-6">
    <?php
        $location = ProductCategory::find()->all();
        $list_wards = ArrayHelper::map($location,'id','name');
        echo $form->field($model, 'category_id')->dropDownList(
        $list_wards,
        ['prompt' => 'Select Category']
        ); 
    ?>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6">
    <?= $form->field($model, 'cost_price')->textInput(['maxlength' => true]) ?>
    </div>



    <div class="col-xl-6 col-lg-6 col-md-6">
    <?php
        $location = Supplier::find()->all();
        $list_wards = ArrayHelper::map($location,'id','name');
        echo $form->field($model, 'supplier_id')->dropDownList(
        $list_wards,
        ['prompt' => 'Select Supplier']
        );
    ?>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6">
            <?php
              echo $form->field($model, 'expiry_date')->widget(DatePicker::className(), [
                  'language' => 'en',
                  'pluginOptions' => [
                      'format' => 'yyyy-mm-dd',
                      'todayHighlight' => true,
                  ],
              ]);

            // echo '<label class="form-label">Birth Date</label>';
            // echo DatePicker::widget([
            //     'name' => 'dp_2',
            //     'type' => DatePicker::TYPE_COMPONENT_PREPEND,
            //     'value' => '23-Feb-1982',
            //     'pluginOptions' => [
            //         'autoclose' => true,
            //         'format' => 'dd-M-yyyy'
            //     ]
            // ]);
            ?>
        </div>


            <?php
            // echo $form->field($model, 'expiry_date')->widget(DatePicker::classname(), [
            // 'name' => 'expiry_date',
            // 'value' => '01/29/2014',
            // 'type' => DatePicker::TYPE_COMPONENT_APPEND,
            // 'pickerIcon' => '<i class="fas fa-calendar-alt text-primary"></i>',
            // 'removeIcon' => '<i class="fas fa-trash text-danger"></i>',
            // 'pluginOptions' => [
            //     'autoclose' => true,
            //     'format' => 'dd-mm-yyyy'
            // ]
            // ]);
            // Modal::begin([
            // 'title' => 'Hello world',
            // 'toggleButton' => ['label' => 'click me'],
            // ]);
            
            // echo 'Say hello...';
            
            // Modal::end();

        ?>
    </div>

    <div class="row" style="margin: 1em; ">

        <div class="col-xl-3 col-lg-3 col-md-3 pull-right" style="margin-top: 1.8em; ">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                <?= Html::resetButton(Yii::t('app', 'Reset'), ['id' => 'resetButton', 'class' => 'btn btn-default']) ?>
            </div>

    </div>


    <?php ActiveForm::end(); ?>


    <!-- </div> -->
</div>
</div>
