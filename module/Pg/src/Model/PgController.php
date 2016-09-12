<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 07/09/2016
 * Time: 16:02
 */

namespace Pg\Controller;


use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;

use Pg\Service\CreatePaymentRequest;
use Pg\Service\PaymentMethodConfig;
use Zend\Debug\Debug;
use Zend\Uri\Uri;

class PgController extends AbstractController {

    /**
     * @var $paymentRequest CreatePaymentRequest
     */
    protected  $paymentRequest;

    protected $url;
    /**
     * @var $checkout CheckoutBuilder
     */

    /**
     * @param ContainerInterface $containerInterface
     */
    function __construct(ContainerInterface $containerInterface)
    {
        $this->containerInterface=$containerInterface;
        $this->controller="pagseguro";
        $this->route="pagseguro";

    }

    /**
     * @return CreatePaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * @param CreatePaymentRequest $paymentRequest
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->paymentRequest = $this->containerInterface->get($paymentRequest);
    }



    /**
     *
     */
    public function pagseguroAction(){
        // Instantiate a new payment_request
        $this->setPaymentRequest('Pg\Service\CreatePaymentRequest');

        // Set the currency
        $this->paymentRequest->setCurrency("BRL");

        // Add an item for this payment request
     $ar[1]=['id'=>'0001', 'description'=>'Notebook prata','quantity'=> 2, 'amount'=>430.00];
     $ar[2]=['id'=>'0002', 'description'=>'Notebook prata','quantity'=> 1, 'amount'=>230.00];

// Add an item for this payment request
        $this->paymentRequest->setItems($ar);
        // Set a reference code for this payment request. It is useful to identify this payment
        // in future notifications.
        $this->paymentRequest->setReference("REF123");

        // Set shipping information for this payment request
        $this->paymentRequest->setShippingType($this->paymentRequest->setSedexCode());
        $this->paymentRequest->setShippingAddress(
            [
                'postalCode'=>'01452002',
                'street'=>'Av. Brig. Faria Lima',
                'number'=>'1384',
                'complement'=>'apto. 114',
                'district'=>'Jardim Paulistano',
                'city'=>'São Paulo',
                'state'=>'SP',
                'country'=>'BRA']
        );

        // Set your customer information.
        $this->paymentRequest->setSender([
            'name'=>'João Comprador',
            'email'=>'email@sandbox.pagseguro.com.br',
            'number'=>'96355664',
            'areaCode'=>'48',
            'documentType'=>'CPF',
            'documentValue'=>'156.009.442-76'
        ]);


        // Set the url used by PagSeguro to redirect user after checkout process ends
        $this->paymentRequest->setRedirectUrl($this->redirect()->toRoute('retorno'));
        // Another way to set checkout parameters
        $this->paymentRequest->addParameter('notificationURL', $this->redirect()->toRoute('notification'));
        $this->paymentRequest->addParameter('senderBornDate', '07/05/1981');


        $this->paymentRequest->addPaymentMethod();
       echo $this->paymentRequest->getRedirectURL();die;
        try {

            /*
             * #### Credentials #####
             * Replace the parameters below with your credentials
             * You can also get your credentials from a config file. See an example:
             * $credentials = new PagSeguroAccountCredentials("vendedor@lojamodelo.com.br",
             * "E231B2C9BCC8474DA2E260B6C8CF60D3");
             */

            // seller authentication
            $credentials = \PagSeguroConfig::getAccountCredentials();

            // application authentication
            //$credentials = PagSeguroConfig::getApplicationCredentials();

            //$credentials->setAuthorizationCode("E231B2C9BCC8474DA2E260B6C8CF60D3");

            // Register this payment request in PagSeguro to obtain the payment URL to redirect your customer.
            $url = $this->paymentRequest->register($credentials);

            self::printPaymentUrl($url);

        } catch (\PagSeguroServiceException $e) {
            die($e->getMessage());
        }
        die;
    }
    public static function printPaymentUrl($url)
    {
        if ($url) {
            echo "<h2>Criando requisi&ccedil;&atilde;o de pagamento</h2>";
            echo "<p>URL do pagamento: <strong>$url</strong></p>";
            echo "<p><a title=\"URL do pagamento\" href=\"$url\">Ir para URL do pagamento.</a></p>";
        }
    }

    public function pagamentosAction(){

    }

    public function assinaturasAction(){

    }

    public function retornoAction(){

    }

    public function errorAction(){

    }
}