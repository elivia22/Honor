<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description',
            'quantity',
            'cost_price',
            'selling_price',
            [
                'attribute' => 'category_id',
                'value' => 'category.name',
            ],
            [
                'attribute' => 'supplier_id',
                'value' => 'supplier.name',
            ],
            'date',
            'expiry_date',
            [
                'class' => ActionColumn::className(),
                'options' => ['width' => '8%', 'align' => 'center'],
                'template' => '{view} {update} {upload} {cancel} {delete} ',

                // 'urlCreator' => function ($action, Customer $model, $key, $index, $column) {
                //     return Url::toRoute([$action, 'id' => $model->id]);
                //  }
            ],
        ],
    ]); ?>


</div>
