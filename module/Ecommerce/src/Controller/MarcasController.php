<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Ecommerce\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Ecommerce\Form\MarcasFilter;
use Ecommerce\Form\MarcasForm;
use Ecommerce\Model\Marcas\Marcas;
use Ecommerce\Model\Marcas\MarcasRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class MarcasController extends AbstractController
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
        $this->table=MarcasRepository::class;
        $this->model=Marcas::class;
        $this->form=MarcasForm::class;
        $this->filter=MarcasFilter::class;
        $this->route="ecommerce";
        $this->controller="marcas";
    }


}