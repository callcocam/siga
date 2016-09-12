<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Ecommerce\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Ecommerce\Form\ProdutosFilter;
use Ecommerce\Form\ProdutosForm;
use Ecommerce\Model\Produtos\Produtos;
use Ecommerce\Model\Produtos\ProdutosRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class ProdutosController extends AbstractController
{

    /**
     * __construct Factory Model
     *
     * @return __construct
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Controller
        $this->containerInterface=$containerInterface;
        $this->table=ProdutosRepository::class;
        $this->model=Produtos::class;
        $this->form=ProdutosForm::class;
        $this->filter=ProdutosFilter::class;
        $this->route="ecommerce";
        $this->controller="produtos";
    }


}