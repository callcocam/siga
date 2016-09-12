<?php
return [
    'router' => [
        'routes' => [
            "authenticate" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/authenticate",
                    "defaults" => [
                        "__NAMESPACE__" => "Auth\Controller",
                        "controller" => "Auth",
                        "action" => "authenticate",
                    ],
                ],
                "may_terminate" => true,
                "child_routes" => [
                    "default" => [
                        "type" => "Segment",
                        "options" => [
                            "route" => "/auth/authenticate[/:provider][/:redirect]",
                            "constraints" => [
                                "provider" => "[a-zA-Z][a-zA-Z0-9_-]*",
                                "redirect" => "[a-zA-Z][a-zA-Z0-9_-]*",
                            ],
                            "defaults" => [
                            ],
                        ],
                    ],
                ],
            ],
            "calback" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/calback",
                    "defaults" => [
                        "__NAMESPACE__" => "Auth\Controller",
                        "controller" => "Auth",
                        "action" => "calback",
                    ],
                ],
            ],
            "saida" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/saida",
                    "defaults" => [
                        "__NAMESPACE__" => "Auth\Controller",
                        "controller" => "Auth",
                        "action" => "saida",
                    ],
                ],
            ],
            "retorno" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/retorno",
                    "defaults" => [
                        "__NAMESPACE__" => "Home\Controller",
                        "controller" => "Home",
                        "action" => "retorno",
                    ],
                ],
            ],
            "notification" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/notification",
                    "defaults" => [
                        "__NAMESPACE__" => "Home\Controller",
                        "controller" => "Home",
                        "action" => "notification",
                    ],
                ],
            ],
            "termos-de-uso" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/termos-de-uso",
                    "defaults" => [
                        "__NAMESPACE__" => "Home\Controller",
                        "controller" => "Home",
                        "action" => "termos-de-uso",
                    ],
                ],
            ],
            "politica-de-privacidade" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/politica-de-privacidade",
                    "defaults" => [
                        "__NAMESPACE__" => "Home\Controller",
                        "controller" => "Home",
                        "action" => "politica-de-privacidade",
                    ],
                ],
            ],
            "access-deny" => [
                "type" => "Literal",
                "options" => [
                    "route" => "/access-deny",
                    "defaults" => [
                        "__NAMESPACE__" => "Home\Controller",
                        "controller" => "Home",
                        "action" => "access-deny",
                    ],
                ],
            ],
        ],
    ],
];