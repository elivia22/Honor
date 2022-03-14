<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'timeZone' => 'Africa/Dar_es_Salaam',
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            // 'cookieValidationKey' => '',
            'enableCookieValidation' => false,
            'enableCsrfValidation' => false,
        ],
        'view' => [
            // theming configurations
            'theme' => [
                'basePath' => '@app/themes/temp',
                'baseUrl' => '@app/themes/temp',
                'pathMap' => [
                    '@app/views' => '@app/themes/temp/views',
                ],
            ],
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/site/login'],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'prod' => [
            'class' => 'app\components\ProductManage',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'yyyy-MM-dd',
            'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
            'decimalSeparator' => '.',
            'thousandSeparator' => ',',
            'currencyCode' => 'TZS',
        ],
        // 'session' => [
        //     'class' => '\app\components\DbSession',
        //     'timeout' => 60 * 60,  // 60 minutes
        //     'sessionTable' => '{{%session}}'
        // ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'login' => 'site/login',    
                'lock-screen' => 'site/lock-screen',
                'logout' => 'site/logout',
                'signup' => 'site/signup',

            ],
        ],
        'assetManager' => [
            'bundles' => [
                'kartik\form\ActiveFormAsset' => [
                    'bsDependencyEnabled' => false // do not load bootstrap assets for a specific asset bundle
                ],
            ],
        ],
        
    ],
    'params' => $params,
    
    'modules' => [
        'menu' => [
                'class' => '\pceuropa\menu\Module',
            ],
            'gridview' =>  [
                'class' => '\kartik\grid\Module',
                'i18n' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@kvgrid/messages',
                    'forceTranslation' => true
                ]
            ],
        ]
];

// if (YII_ENV_DEV) {
// //     // configuration adjustments for 'dev' environment
// //     $config['bootstrap'][] = 'debug';
// //     $config['modules']['debug'] = [
// //         'class' => 'yii\debug\Module',
// //         // uncomment the following to add your IP if you are not connecting from localhost.
// //         //'allowedIPs' => ['127.0.0.1', '::1'],
// //     ];

//     $config['bootstrap'][] = 'gii';
//     $config['modules']['gii'] = [
//         'class' => 'yii\gii\Module',
//         // uncomment the following to add your IP if you are not connecting from localhost.
//         //'allowedIPs' => ['127.0.0.1', '::1'],
//     ];

//     $config['modules']['gii'] = [
//         'class' => 'yii\gii\Module',      
//         // 'allowedIPs' => ['127.0.0.1', '::1', '192.168.0.*', '192.168.178.20'],  
//         'generators' => [ //here
//             'crud' => [ // generator name
//                 'class' => 'yii\gii\generators\crud\Generator', // generator class
//                 'templates' => [ //setting for out templates
//                     'myCrud' => '@app/myTemplates/crud/temp', // template name => path to template
//                 ]
//             ]
//         ],
//     ];

// }
if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class'=>'yii\gii\Module',
        // , '192.168.0.*', '192.168.0.25','192.168.0.65','175.20.212.33'
        'allowedIPs' => [
            '127.0.0.1', '::1'
        ]
        ];
}

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        //,'192.168.1.92','10.0.7.67','175.20.15.53','175.20.15.250','154.118.230.18'
        'allowedIPs' => [
            '127.0.0.1', '::1'
        ]
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        //, '192.168.1.92', '10.0.7.67', '175.20.15.53', '175.20.15.250'
        'allowedIPs' => [
            '127.0.0.1', '::1'
        ]
    ];
}

return $config;
