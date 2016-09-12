<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Pg\Model\Pgassinaturas\Factory;

use Base\Model\AbstractFactory;
use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Pg\Model\Pgassinaturas\PgassinaturasRepository;
use Pg\Model\Pgassinaturas\Pgassinaturas;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class PgassinaturasRepositoryFactory extends AbstractFactory implements FactoryInterface
{

    /**
     * __invoke Factory Model
     *
     * @return __invoke
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        // Configurações iniciais do Factory Table
        $this->model=Pgassinaturas::class;
        $this->table="bs_pg_assinaturas";
        return new PgassinaturasRepository($this->getTablegateway($container));
    }


}