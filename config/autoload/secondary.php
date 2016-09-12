<?php

$secondary= [
    [
        'label' => 'Pag Seguro',
        'class' => 'treeview',
        'action'     => '#',
        'icone'     => '',
        'title'   => 'Administrativo',
        'pages'   => [

            [
                'label'      => 'PAG SEGURO',
                'route'      => 'pag-seguro',
                'controller' => 'pag-seguro',
                'resource'   =>  'Admin\Controller\PagSeguroController',
                'action'     => 'pag-seguro',
                'privilege'  => 'pag-seguro',
                'icone'      => '',
                'title'      => 'ok',
            ],

        ]
    ],
    [
        'label' => 'POLITICA DE PRIVACIDADE',
        'route'      => 'pag-seguro',
        'action'     => 'pag-seguro',
        'icone'     => '',
        'title'   => 'Administrativo',
    ],

];