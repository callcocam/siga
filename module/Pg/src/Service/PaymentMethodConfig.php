<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 08/09/2016
 * Time: 15:44
 */

namespace Pg\Service;


use Zend\Debug\Debug;

class PaymentMethodConfig{
    /**
     * @var array
     */
    private $config;


    /**
     * @param array $config
     */
    public function __construct(array $config = null)
    {

        $this->config = $config;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }


} 