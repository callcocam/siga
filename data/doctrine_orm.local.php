<?php
//config/autoload/doctrine_orm.local.php
// return array(
//     'doctrine' => array(
//         'connection' => array(
//             'orm_default' => array(
//                 'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
//                 'params' => array(
//                     'host'     => 'localhost',
//                     'port'     => '3306',
//                     'user'     => 'root',
//                     'password' => '',
//                     'dbname'   => 'base_siga',
//                     'driverOptions' => array(
//                         PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
//                     )
//                 )
//             ),

//         ),
        
//     ),
// );

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    'host'     => 'callcocam.mysql.dbaas.com.br',
                    'port'     => '3306',
                    'user'     => 'callcocam',
                    'password' => 'vmiq2552',
                    'dbname'   => 'callcocam',
                    'driverOptions' => array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"
                    )
                )
            )
        )
    ),
);