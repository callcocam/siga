<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 05/09/2016
 * Time: 11:35
 */

namespace Auth\Twitter\Factory;



use Auth\Twitter\Twitter;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class TwitterHyFactory implements FactoryInterface{

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
        return new Twitter($config['social-auth']);
    }
}