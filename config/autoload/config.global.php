<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 20/07/2016
 * Time: 23:03
 */
return [
    'zf-config'=>[
        'module'=>'module',
        'staticsalt'=>'aFGQ475SDsdfsaf2342',
        'sessao'=>'funcionarios',
        'serverHost'=>'http://rest.callcocam.com.br',
        'site_name'=>'SIGA SMART',
        'site_url'=>'http://callcocam.com.br',
        'imgDir'=>'./public/assets_admin',
        //'imgDir'=>'./public_html/assets_admin',
        'imgUrl'=>'/assets_admin',
        'email_contato'=>['Caudio'=>'callcocam@gmail.com'],
        //'serverHost'=>'http://localhost.server',
        'moderarcomments'=>'1',
        'count_per_page'=>'10',
        'modules'=>['Admin'=>'Modulo Administrativo','Home'=>'Module Administrativo Dos Layouts','Auth'=>'Controle de Acesso','Callcocam'=>'Layult Callcocam','Make'=>'Construtor de Modulos','Pg'=>'PAG SEGURO','Ecommerce'=>'E-commerce'],
        'grupos'=>['Admin'=>'Administrativo','Home'=>'Layouts','Auth'=>'Controle de Acesso','Make'=>'Construtor de Modulos','Pag Seguro'=>'PAG SEGURO','Ecommerce'=>'E-commerce'],
        'routeAuthenticate'=>'auth',
        'routeLogout'=>'auth/logout-success',
        'routeSuccess'=>'auth/register-success',
        'routeSuccess'=>'auth/register-success',
    ]
];