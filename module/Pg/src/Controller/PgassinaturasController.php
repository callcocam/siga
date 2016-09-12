<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Pg\Controller;

use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;
use Pg\Form\PgassinaturasFilter;
use Pg\Form\PgassinaturasForm;
use Pg\Model\Pgassinaturas\Pgassinaturas;
use Pg\Model\Pgassinaturas\PgassinaturasRepository;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class PgassinaturasController extends AbstractController
{

    /**
     * __construct Factory Model
     *
     * @param ContainerInterface $containerInterface
     * @return \Pg\Controller\PgassinaturasController
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Controller
        $this->containerInterface=$containerInterface;
        $this->table=PgassinaturasRepository::class;
        $this->model=Pgassinaturas::class;
        $this->form=PgassinaturasForm::class;
        $this->filter=PgassinaturasFilter::class;
        $this->route="pagseguro";
        $this->controller="pgassinaturas";
    }


}