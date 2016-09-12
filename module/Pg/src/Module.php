<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/09/2016
 * Time: 21:08
 */

namespace Pg;


use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface{


    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__.'/../config/module.config.php';
    }

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return [
            'factories'=>[
                'Pg\Model\Pgassinaturas\Pgassinaturas'=>'Pg\Model\Pgassinaturas\Factory\PgassinaturasFactory',

                'Pg\Model\Pgassinaturas\PgassinaturasRepository'=>'Pg\Model\Pgassinaturas\Factory\PgassinaturasRepositoryFactory',

                'Pg\Form\PgassinaturasForm'=>'Pg\Form\Factory\PgassinaturasFormFactory',

                'Pg\Form\PgassinaturasFilter'=>'Pg\Form\Factory\PgassinaturasFilterFactory',

            ]
        ];
    }

}