<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Ecommerce\Model\Marcas;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Marcas extends AbstractModel
{

    protected $title = null;

    protected $url = null;

    protected $images = 'no_image.jpg';

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
     * get url
     *
     * @return varchar
     */
    public function getUrl()
    {
        return $this->url;
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
    public function setTitle($title = null)
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set url
     *
     * @return varchar
     */
    public function setUrl($url = null)
    {
        $this->url=$url;
        return $this;
    }

    /**
     * set images
     *
     * @return varchar
     */
    public function setImages($images = 'no_image.jpg')
    {
        $this->images=$images;
        return $this;
    }


}