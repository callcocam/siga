<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 08/09/2016
 * Time: 16:17
 */

namespace Pg\Service\Factory;


use Interop\Container\ContainerInterface;
use Pg\Service\PaymentMethodConfig;
use Zend\ServiceManager\Factory\FactoryInterface;

class PaymentMethodConfigFactory implements FactoryInterface{

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
        $PaymentMethodConfig=[];
        try{
            $PaymentMethodConfig=$container->get('Config')['pag-seguro']['payment-method-config'];
        }catch (\PagSeguroServiceException $ex){
            die("Configuração para o pag seguguro não foi encontrada [pag-seguro][PaymentMethodConfig]");
        }
        return new PaymentMethodConfig($PaymentMethodConfig);
    }
}