<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/09/2016
 * Time: 21:11
 */
namespace Pg;


use Pg\Controller\Factory\PgAssinaturasControllerFactory;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            "pagseguro" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/pagseguro",
                    "defaults" => [
                        "__NAMESPACE__" => "Pg\Controller",
                        "controller" => "Pg",
                        "action" => "index",
                    ],
                ],
                "may_terminate" => true,
                "child_routes" => [
                    "default" => [
                        "type" => "Segment",
                        "options" => [
                            "route" => "/[:controller[/:action][/:id]]",
                            "constraints" => [
                                "controller" => "[a-zA-Z][a-zA-Z0-9_-]*",
                                "action" => "[a-zA-Z][a-zA-Z0-9_-]*",
                            ],
                            "defaults" => [
                            ],
                        ],
                    ],
                ],
            ],
        ],

    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
