<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 05/09/2016
 * Time: 14:17
 */

namespace Auth\Storage;


use Interop\Container\ContainerInterface;
use Zend\Debug\Debug;
use Zend\Uri\Uri;

class SocialAuth extends \Hybrid_Auth {

    /**
     * @param array $config
     */
    public function __construct(ContainerInterface $containerInterface, $config)
    {
        $config['base_url'] = $this->getBackendUrl($containerInterface);
        parent::__construct($config);

    }




    /**
     * Get the base URI for the current controller
     *
     * @return string
     */
    protected function getBackendUrl(ContainerInterface $sl)
    {
        $router = $sl->get('router');
        $route = $router->assemble(array(), array('name' => 'calback'));
        $request = $sl->get('request');
        $basePath = $request->getBasePath();
        $uri = new Uri($request->getUri());
        $uri->setPath($basePath);
        $uri->setQuery(array());
        $uri->setFragment('');
        //echo sprintf("%s://%s%s",$uri->getScheme(), $uri->getHost(),preg_replace('/[\/]+/', '/', sprintf("%s/%s",$uri->getPath(),$route)));die;
       // echo sprintf("%s://%s:%s%s",$uri->getScheme(), $uri->getHost(),$uri->getPort(),preg_replace('/[\/]+/', '/', sprintf("%s/%s",$uri->getPath(),$route)));die;
        return sprintf("%s://%s%s",$uri->getScheme(), $uri->getHost(),preg_replace('/[\/]+/', '/', sprintf("%s/%s",$uri->getPath(),$route)));
    }


} 