<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Admin\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Admin\Form\TraductionFilter;
use Admin\Form\TraductionForm;
use Admin\Model\Traduction\Traduction;
use Admin\Model\Traduction\TraductionRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class TraductionController extends AbstractController
{

    /**
     * __construct Factory Model
     *
     * @param ContainerInterface $containerInterface
     * @return \Admin\Controller\TraductionController
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Controller
        $this->containerInterface=$containerInterface;
        $this->table=TraductionRepository::class;
        $this->model=Traduction::class;
        $this->form=TraductionForm::class;
        $this->filter=TraductionFilter::class;
        $this->route="admin";
        $this->controller="traduction";
        $this->colunas=1;
    }


}