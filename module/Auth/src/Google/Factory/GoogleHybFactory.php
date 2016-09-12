<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 05/09/2016
 * Time: 12:40
 */

namespace Auth\Google\Factory;


use Auth\Google\Google;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class GoogleHybFactory implements FactoryInterface {

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config=$container->get('Config');
        return new Google($config['social-auth']);
    }
}