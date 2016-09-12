<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Auth\Model\Redesociais;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Redesociais extends AbstractModel
{

    protected $title = '';

    protected $provider = '';

    protected $enabled = '1';

    protected $key = '';

    protected $secret = '';

    protected $includeEmail = '1';

    protected $scope = null;

    protected $redirect_uri = '';

    protected $access_type = 'online';

    protected $trustForwarded = null;

    protected $images = null;

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
     * get provider
     *
     * @return varchar
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * get enabled
     *
     * @return int
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * get key
     *
     * @return varchar
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * get secret
     *
     * @return varchar
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * get includeEmail
     *
     * @return int
     */
    public function getIncludeemail()
    {
        return $this->includeEmail;
    }

    /**
     * get scope
     *
     * @return varchar
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * get redirect_uri
     *
     * @return varchar
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * get access_type
     *
     * @return varchar
     */
    public function getAccessType()
    {
        return $this->access_type;
    }

    /**
     * get trustForwarded
     *
     * @return varchar
     */
    public function getTrustforwarded()
    {
        return $this->trustForwarded;
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
    public function setTitle($title = '')
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set provider
     *
     * @return varchar
     */
    public function setProvider($provider = '')
    {
        $this->provider=$provider;
        return $this;
    }

    /**
     * set enabled
     *
     * @return int
     */
    public function setEnabled($enabled = '1')
    {
        $this->enabled=$enabled;
        return $this;
    }

    /**
     * set key
     *
     * @return varchar
     */
    public function setKey($key = '')
    {
        $this->key=$key;
        return $this;
    }

    /**
     * set secret
     *
     * @return varchar
     */
    public function setSecret($secret = '')
    {
        $this->secret=$secret;
        return $this;
    }

    /**
     * set includeEmail
     *
     * @return int
     */
    public function setIncludeemail($includeEmail = '1')
    {
        $this->includeEmail=$includeEmail;
        return $this;
    }

    /**
     * set scope
     *
     * @return varchar
     */
    public function setScope($scope = null)
    {
        $this->scope=$scope;
        return $this;
    }

    /**
     * set redirect_uri
     *
     * @return varchar
     */
    public function setRedirectUri($redirect_uri = '')
    {
        $this->redirect_uri=$redirect_uri;
        return $this;
    }

    /**
     * set access_type
     *
     * @return varchar
     */
    public function setAccessType($access_type = 'online')
    {
        $this->access_type=$access_type;
        return $this;
    }

    /**
     * set trustForwarded
     *
     * @return varchar
     */
    public function setTrustforwarded($trustForwarded = null)
    {
        $this->trustForwarded=$trustForwarded;
        return $this;
    }

    /**
     * set images
     *
     * @return varchar
     */
    public function setImages($images = null)
    {
        $this->images=$images;
        return $this;
    }


}