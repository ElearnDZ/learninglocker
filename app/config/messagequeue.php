<?php

return [
  'type' => 'none', // none, rabbitmq
  'rabbitmq' => [
    'host'=> 'localhost',
    'port'=> 5672,
    'username'=> 'guest',
    'password'=> 'guest',
    'vhost'=> '/',
    'exchange'=> 'learninglocker',
    'ssl_enabled'=> true,
    'ssl'=> [
      'cafile'=> '/etc/ssl/cert/somecert.pem',
      'verify_peer'=> true
    ]
  ]
];