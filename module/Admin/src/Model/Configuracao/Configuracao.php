<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Admin\Model\Configuracao;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Configuracao extends AbstractModel
{

    protected $title = 'RAZAO SOCIAL';

    protected $fantasia = null;

    protected $images = 'default-companies.jpg';

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
     * get fantasia
     *
     * @return varchar
     */
    public function getFantasia()
    {
        return $this->fantasia;
    }

    /**
     * get images
     *
     * @return varchar
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * set title
     *
     * @return varchar
     */
    public function setTitle($title = 'RAZAO SOCIAL')
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set fantasia
     *
     * @return varchar
     */
    public function setFantasia($fantasia = null)
    {
        $this->fantasia=$fantasia;
        return $this;
    }

    /**
     * set images
     *
     * @return varchar
     */
    public function setImages($images = 'default-companies.jpg')
    {
        $this->images=$images;
        return $this;
    }


}

