<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=xxxxxxx;dbname=mynep_db',
            'username' => 'xxxxx',
            'password' => 'xxxxx', 
            /*'dsn' => 'mysql:host=127.0.0.1;dbname=mynep_db',
            'username' => 'root',
            'password' => 'root',*/
            'charset' => 'utf8',
        ],
		// 'cdb' => [
		// 	'class' => 'yii\db\Connection',
  //   		'dsn' => 'mysql:host=183.136.236.76;dbname=cc_db',
  //   		'username' => 'demo_cc_47',
  //   		'password' => 'FeLSQtXrfufDzSatdb',
  //   		'charset' => 'utf8',
  //   	],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
