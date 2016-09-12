<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/09/2016
 * Time: 16:03
 */

namespace Pg\Controller\Factory;


use Interop\Container\ContainerInterface;
use Pg\Controller\PgController;
use Zend\ServiceManager\Factory\FactoryInterface;

class PgControllerFactory implements FactoryInterface {

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
        return new PgController($container);
    }
}