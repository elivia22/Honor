<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Location;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
    
    <?php
        $location = Location::find()->all();
        $list_wards = ArrayHelper::map($location,'id','ward');
        echo $form->field($model, 'location_id')->dropDownList(
        $list_wards,
        ['prompt' => 'Select Location']
        ); 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
