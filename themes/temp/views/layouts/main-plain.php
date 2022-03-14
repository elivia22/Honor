<?php
use yii\helpers\Html;
use Yii;

// use yii\base\View::render();

/* @var $this \yii\web\View */
/* @var $content string */

// require_once(Yii::$app->basePath . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "layouts" . DIRECTORY_SEPARATOR . "_modal.php"); 



if (class_exists('backend\assets\AppAsset')) {
        app\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    // dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@app/themes/temp/assets');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="msapplication-TileColor" content="#ff685c">
		<meta name="theme-color" content="#32cafe">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
		<!-- <link rel="stylesheet" href="assets/fonts/fonts/font-awesome.min.css"> -->

		<!-- Font Family-->
		<!-- <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet"> -->
    </head>
	<body class="app sidebar-mini rtl">
    <?php $this->beginBody() ?>


        <!-- <?= $this->render(
            'content.php',
            ['content' => $content, ]//'directoryAsset' => $directoryAsset
        ) ?> -->


    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php 
// }
 ?>


