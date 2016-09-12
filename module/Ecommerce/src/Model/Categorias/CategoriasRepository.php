<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Ecommerce\Model\Categorias;

use Base\Model\AbstractModel;
use Zend\Db\TableGateway\TableGateway;
use Base\Model\AbstractRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class CategoriasRepository extends AbstractRepository
{

    /**
     * __construct Factory Model
     *
     * @param TableGateway $tableGateway
     * @return \Ecommerce\Model\Categorias\CategoriasRepository
     */
    public function __construct(TableGateway $tableGateway)
    {
        // Configurações iniciais do Factory Repository
        $this->tableGateway=$tableGateway;
    }

    public function insert(AbstractModel $model)
    {
        $model->setUrl($this->url($model));
        return parent::insert($model);
    }

    public function update(AbstractModel $model, $where = null)
    {
        $model->setUrl($this->url($model));
        return parent::update($model, $where);
    }


}