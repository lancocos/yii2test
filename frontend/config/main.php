<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => '0x0001',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','debug'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'merchant' => [
            'class' => 'app\modules\merchant\Module',
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user'=>[
            'identityClass'=>'frontend\models\TestUser1',
        ],
//        'user' => [
//            //'identityClass' => 'common\models\User',
//
//            'enableAutoLogin' => true,
//            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
//        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'testCompent'=>[
            'class'=>'stdClass',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        'name'=>'adv',
        'defaultRoute'=>'goods/lists',
        'on beforeAction ' => function ($event) {
            echo 111;
            exit;
        }
    ],
    'params' => $params,
];
