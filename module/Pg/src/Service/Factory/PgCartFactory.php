<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 08/09/2016
 * Time: 15:13
 */

namespace Pg\Service\Factory;


use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class PgCartFactory implements FactoryInterface{

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @throws \Exception
     * @return object
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('Config');

        if (!isset($config['zendcart']))
        {
            throw new \Exception('Configuration ZendCart not set.');
        }

        if (!isset($config['zendcart']['vat']))
        {
            throw new \Exception('No vat index defined.');
        }

        $default = array(
            'on_insert_update_existing_item' => false,
            'table'=>'bs_pg_pedido'
        );
        $options = array_merge($default, $config['zendcart']);

        return new Cart($container,$options,$container->get(VendasFilter::class));
    }
}