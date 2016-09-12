<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 16/08/2016
 * Time: 23:50
 */

namespace Home\Controller;


use Base\Services\Client;
use Interop\Container\ContainerInterface;
use Pg\Model\Pgassinaturas\PgassinaturasRepository;
use Zend\Debug\Debug;
use Zend\View\Model\JsonModel;
use Zend\Xml2Json\Xml2Json;

class HomeController extends AbstractController {

    /**
     * @param ContainerInterface $containerInterface
     */
    function __construct(ContainerInterface $containerInterface)
    {
        $this->containerInterface=$containerInterface;
    }

    public function assinaturasAction(){
        $this->table=PgassinaturasRepository::class;
        $this->getTable()->select();
        return new JsonModel($this->getTable()->getCurrents());

    }

    public function initialsesseionpgAction(){
         $sessionId=['id'=>''];
        //https://ws.pagseguro.uol.com.br/sessions
        /**
         * @var $cliente Client
         */
        $cliente=$this->containerInterface->get(Client::class);

        // This is equivalent to setting a URL in the Client's constructor:
        $cliente->setUri('https://ws.sandbox.pagseguro.uol.com.br/sessions/');
        $cliente->setMethod('POST');
      // Adding several parameters with one call
        $cliente->setParameterPost([
            'email'  => 'callcocam@gmail.com',
            'token' => 'BEFA9E61638143A39CEAA12C0175D324'
        ]);
        $response = $cliente->send();

        if ($response->isSuccess()) {
            $jsonSessionId=Xml2Json::fromXml($response->getBody(),true);
            $sessionId=json_decode($jsonSessionId,true);
        }

      return new JsonModel($sessionId);
    }
}