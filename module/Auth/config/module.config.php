<?php
namespace Auth;
return [
    'router' => [
        'routes' => [
             "auth" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/auth",
                    "defaults" => [
                        "__NAMESPACE__" => "Auth\Controller",
                        "controller" => "Auth",
                        "action" => "login",
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
