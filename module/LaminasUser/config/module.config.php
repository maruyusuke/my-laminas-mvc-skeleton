<?php

return [
  'router' => [
    'routes' => [
        'laminas-user-hello-world' => [
            'type' => 'Literal',
                'options' => [
                'route' => '/hello/world',
                'defaults' => [
                    'controller' => 'LaminasUser\Controller\Hello',
                    'action'     => 'world',
                ],
            ],
        ],
    ],
  ],
  'controllers' => [
    'invokables' => [
        'LaminasUser\Controller\Index' => 'LaminasUser\Controller\HelloController',
        // Do similar for each other controller in your module
    ],
  ],
  "view_manager" => [
    "template_path_stack" => [
      "laminas-user" => __DIR__ . '/../view',
    ],
  ],
];
