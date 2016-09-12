<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Auth\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Auth\Form\RedesociaisFilter;
use Auth\Form\RedesociaisForm;
use Auth\Model\Redesociais\Redesociais;
use Auth\Model\Redesociais\RedesociaisRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class RedesociaisController extends AbstractController
{

    /**
     * __construct Factory Model
     *
     * @param ContainerInterface $containerInterface
     * @return \Auth\Controller\RedesociaisController
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Controller
        $this->containerInterface=$containerInterface;
        $this->table=RedesociaisRepository::class;
        $this->model=Redesociais::class;
        $this->form=RedesociaisForm::class;
        $this->filter=RedesociaisFilter::class;
        $this->route="auth";
        $this->controller="redesociais";
    }


}