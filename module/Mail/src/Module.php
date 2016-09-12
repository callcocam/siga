<?php

/**
 * Module
 */

namespace Mail;


use Interop\Container\ContainerInterface;
use Mail\Form\Factory\MailFilterFactory;
use Mail\Form\Factory\MailFormFactory;
use Mail\Form\MailFilter;
use Mail\Form\MailForm;
use Mail\View\Helper\MailHelper;
use Zend\ModuleManager\Feature\ServiceProviderInterface;
use Zend\ModuleManager\Feature\ViewHelperProviderInterface;

class Module implements ServiceProviderInterface, ViewHelperProviderInterface{

    public function getConfig() {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return [
            'factories'=>
                [
                    MailForm::class=>MailFormFactory::class,
                    MailFilter::class=>MailFilterFactory::class
                ]
        ];
    }


    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getViewHelperConfig()
    {
        return [
            'invokables' => [

                          ],
            'factories'=>[
                'MailHelper'=>function(ContainerInterface $containerInterface){
                    return new MailHelper($containerInterface);
                }
            ]
        ];
    }
}
