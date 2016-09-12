<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 08/09/2016
 * Time: 12:32
 */

namespace Pg\Service;



use Interop\Container\ContainerInterface;
use PagSeguroPaymentRequest;
use Zend\Uri\Uri;


class CreatePaymentRequest extends PagSeguroPaymentRequest {
    protected $sender;
    protected $sedexCode;
    protected $shippingAddress;
    /**
     * @var PaymentMethodConfig
     */
    private $config;

    function __construct(Customer $sender,ShippingAddress $shippingAddress,PaymentMethodConfig $config)
    {
        $this->sender = $sender;
        $this->shippingAddress = $shippingAddress;
        parent::__construct();
        $this->config = $config->getConfig();
    }


    /**
     * @param array $sender
     */
    public function setSender(array $sender)
    {
        $this->sender->exchangeArray($sender);
       return parent::setSender(
           $this->sender->getName(),
           $this->sender->getEmail(),
           $this->sender->getAreaCode(),
           $this->sender->getNumber(),
           $this->sender->getDocumentType(),
           $this->sender->getDocumentValue());
    }

    /**
     * @param mixed $sedexCode
     * @return int
     */
    public function setSedexCode($sedexCode='SEDEX')
    {
        $this->sedexCode = \PagSeguroShippingType::getCodeByType($sedexCode);
        return $this->sedexCode;
    }

    /**
     * @param array $shippingAddress
     */
    public function setShippingAddress(array $shippingAddress) {
        $this->shippingAddress->exchangeArray($shippingAddress);
        return parent::setShippingAddress($this->shippingAddress->getPostalCode(),
           $this->shippingAddress->getStreet(),
           $this->shippingAddress->getNumber(),
           $this->shippingAddress->getComplement(),
           $this->shippingAddress->getDistrict(),
           $this->shippingAddress->getCity(),
           $this->shippingAddress->getState(),
           $this->shippingAddress->getCountry());
    }


    public function addPaymentMethod(){

        if(isset($this->config['discount-per-payment-method'])){
            foreach($this->config['discount-per-payment-method'] as $value){
                parent::addPaymentMethodConfig($value[0],$value[1],$value[2]);
            }
        }
        if(isset($this->config['group-add-payment-methods'])){
            foreach($this->config['group-add-payment-methods'] as $value){
                parent::acceptPaymentMethodGroup($value[0],$value[1]);
            }
        }
        if(isset($this->config['remove-group-payment-methods'])){
            foreach($this->config['remove-group-payment-methods'] as  $value){
                parent::excludePaymentMethodGroup($value[0],$value[1]);
            }
        }
       return $this;

    }

    public function setRedirectURL(ContainerInterface $containerInterface,$redirectURL)
    {

        parent::setRedirectURL($this->gera_url($containerInterface,$redirectURL));
    }

    public function setNotificationURL(ContainerInterface $containerInterface,$notificationURL)
    {
        parent::setNotificationURL($this->gera_url($containerInterface,$notificationURL));
    }


    public function gera_url($containerInterface,$redirectURL){
        $request = $containerInterface->get('request');
        $basePath = $request->getBasePath();
        $uri = new Uri($request->getUri());
        $uri->setPath($basePath);
        $uri->setQuery(array());
        $uri->setFragment('');
        $url = sprintf("%s%s", $containerInterface->get('request')->getServer('HTTP_ORIGIN'), $redirectURL);
        return sprintf("%s://%s%s",$uri->getScheme(), $uri->getHost(),preg_replace('/[\/]+/', '/', sprintf("%s/%s",$uri->getPath(),$url)));

    }


}