<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Ecommerce\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Ecommerce\Form\CategoriasFilter;
use Ecommerce\Form\CategoriasForm;
use Ecommerce\Model\Categorias\Categorias;
use Ecommerce\Model\Categorias\CategoriasRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class CategoriasController extends AbstractController
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
        $this->table=CategoriasRepository::class;
        $this->model=Categorias::class;
        $this->form=CategoriasForm::class;
        $this->filter=CategoriasFilter::class;
        $this->route="ecommerce";
        $this->controller="categorias";
    }


}