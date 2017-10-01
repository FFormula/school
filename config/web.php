<?php

return [
    'id' => 'school-web',
    'basePath' => realpath (__DIR__ . '/../'),
    'bootstrap' => ['debug'],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['ru', 'en'],
            'enableDefaultLanguageUrlCode' => true
        ],
        'request' => [
            'cookieValidationKey' => 'super secret code'
        ]
    ],
    'modules' => [
        'debug' => 'yii\debug\Module'
    ]
];