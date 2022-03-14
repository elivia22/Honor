<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Payment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'fullname',
                'options' => ['width' => '22%;', 'align' => 'center'],
                'value' => 'fullname',
            ],
            [
                'attribute' => 'product_id',
                'options' => ['width' => '15%;', 'align' => 'center'],
                'value' => 'product.name',
            ],
            [
                'attribute' => 'quantity',
                'options' => ['width' => '6%;', 'align' => 'center'],
                'value' => 'quantity',
            ],
            [
                'attribute' => 'price',
                'options' => ['width' => '13%;', 'align' => 'center'],
                'value' => 'price',
            ],
            [
                'attribute' => 'date',
                'options' => ['width' => '11%;', 'align' => 'center'],
                'value' => 'date',
            ],
            [
                'attribute' => 'location_id',
                'options' => ['width' => '13%;', 'align' => 'center'],
                'value' => 'location.ward',
            ],
            [
                'attribute' => 'phone',
                'options' => ['width' => '8%;', 'align' => 'center'],
                'value' => 'phone',
            ],
            [
                'class' => ActionColumn::className(),
                'options' => ['width' => '9%;', 'align' => 'center'],
                // 'template' => '{view} {update} {upload} {cancel} {delete} ',
                'buttons' => [
                    'view',
                    'update',
                    'delete',
                    // 'cancel' => function ($url, $model, $key) {     // render your custom button
                    //     return $model->status == 'PAID' ? '' : Html::a('<span class="glyphicon glyphicon-remove-sign"></span>', ['customers/bill-operation-request', 'id' => $model->bill_id, 'request' => 'CANCEL'], ['style' => '', 'title' => 'Cancel This Bill']);
                    // },
                    // 'print' => function ($url, $model, $key) {     // render your custom button
                    //     return Html::a('<span class="glyphicon glyphicon-print"></span>', ['customers/bill-print', 'id' => $model->bill_id], ['style' => '', 'title' => 'View bill to print']);
                    // },
                    // 'fiscalize' => function ($url, $model, $key) use ($now) {     // render your custom button
                    //     return (/*$now < (new DateTime($model->bill_expire_date))->format('Y-m-d') &&*/$model->status == 'UPLOADED' && !$model->signature) ? Html::a('<span class="glyphicon glyphicon-send"></span>', ['customers/fiscalize', 'id' => $model->bill_id], ['style' => '', 'title' => 'Fiscalize Bill']) : '';
                    // },
                ],

                // 'urlCreator' => function ($action, Customer $model, $key, $index, $column) {
                //     return Url::toRoute([$action, 'id' => $model->id]);
                //  }
            ],
        ],
    ]); ?>


</div>
