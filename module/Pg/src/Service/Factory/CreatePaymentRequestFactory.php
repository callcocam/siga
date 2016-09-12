<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 08/09/2016
 * Time: 12:42
 */

namespace Pg\Service\Factory;


use Interop\Container\ContainerInterface;
use Pg\Service\CreatePaymentRequest;
use Pg\Service\Customer;
use Pg\Service\PaymentMethodConfig;
use Pg\Service\ShippingAddress;
use Zend\ServiceManager\Factory\FactoryInterface;

class CreatePaymentRequestFactory implements FactoryInterface{

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
        return new CreatePaymentRequest(new Customer(),new ShippingAddress(),$container->get(PaymentMethodConfig::class));
    }
}