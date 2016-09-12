<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 12/09/2016
 * Time: 08:33
 */

namespace Ecommerce;


use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface {

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__.'/../config/module.config.php';
    }
}