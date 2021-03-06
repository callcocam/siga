<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Auth\Model\Resources;

use Zend\Db\TableGateway\TableGateway;
use Base\Model\AbstractRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class ResourcesRepository extends AbstractRepository
{

    /**
     * __construct Factory Model
     *
     * @param TableGateway $tableGateway
     * @return \Auth\Model\Resources\ResourcesRepository
     */
    public function __construct(TableGateway $tableGateway)
    {
        // Configurações iniciais do Factory Repository
        $this->tableGateway=$tableGateway;
    }


}