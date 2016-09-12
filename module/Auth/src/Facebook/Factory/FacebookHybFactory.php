<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 05/09/2016
 * Time: 12:25
 */

namespace Auth\Facebook\Factory;


use Auth\Facebook\Facebook;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class FacebookHybFactory implements FactoryInterface{

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
        return new Facebook($config['social-auth']);
    }
}