<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Admin\Model\Traduction;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Traduction extends AbstractModel
{

    protected $title = '';

    protected $placeholder = null;

    protected $dica_tela = null;

    /**
     * get title
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * get placeholder
     *
     * @return varchar
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * get dica_tela
     *
     * @return varchar
     */
    public function getDicaTela()
    {
        return $this->dica_tela;
    }

    /**
     * set title
     *
     * @return varchar
     */
    public function setTitle($title = '')
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set placeholder
     *
     * @return varchar
     */
    public function setPlaceholder($placeholder = null)
    {
        $this->placeholder=$placeholder;
        return $this;
    }

    /**
     * set dica_tela
     *
     * @return varchar
     */
    public function setDicaTela($dica_tela = null)
    {
        $this->dica_tela=$dica_tela;
        return $this;
    }


}