<?php
//\Yii::$app->language = 'ru-RU'; - переключатель языков
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'baseUrl' => '',
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'ZjwBdgfCN8t1Hn9KGiLJbA2yzw6eAb-A',
        ],
        'session' => [
            'class' => 'yii\web\Session',
            'timeout'=>3600,
//            'class' => 'yii\web\DbSession',
//             'db' => 'db',  // ID компонента для взаимодействия с БД. По умолчанию 'db'.
//             'sessionTable' => 'session', // название таблицы для хранения данных сессии. По умолчанию 'session'.
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\modules\admin\models\Users',
            'enableAutoLogin' => true,
            'enableSession' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages/',
                    'sourceLanguage' => 'en-GB',
                    'fileMap' => [
                        'app'       => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
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
//            'class' => 'yii\web\UrlManager',
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['ru', 'en'],
            'enableDefaultLanguageUrlCode' => true,
            'enablePrettyUrl' => true,
//            'showScriptName' => false,
            'rules' => [
                'admin/post/<alias:\w+>' => 'admin/blog/post',
                'post/edit/<alias:\w+>' => 'admin/blog/edit',
                'post/delete/<alias:\w+>' => 'admin/blog/delete',
                'post/add' => 'admin/blog/add',
                'admin/tag/<alias:\w+>' => 'admin/tag/post',
                'tag/edit/<alias:\w+>' => 'admin/tag/edit',
                'tag/delete/<alias:\w+>' => 'admin/tag/delete',
                'tag/add' => 'admin/tag/add',
                'admin/category/<alias:\w+>' => 'admin/category/post',
                'category/edit/<alias:\w+>' => 'admin/category/edit',
                'category/delete/<alias:\w+>' => 'admin/category/delete',
                'category/add' => 'admin/category/add',
                'about' => 'site/about',
                'contact' => 'site/contact',
                'index' => 'site/index',
                'admin/login' => 'admin/login/login',
                'admin/admin-logout' => 'admin/login/admin-logout',
//                'blog/post/<alias>' => 'blog/post',
                'blog' => 'blog/index',
                '<controller:\w+>/page/<page:\d+>' => '<controller>/index',
                '<controller:\w+>' => '<controller>/index',
//                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
            ],
        ],


    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['127.0.0.1', '127.0.1.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
