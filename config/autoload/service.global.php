<?php
return [
    'service_manager' => [
        'factories' => [
            'Zend\Db\Adapter\Adapter'=> 'Zend\Db\Adapter\AdapterServiceFactory',
            'Base\Services\PhpArrayFactory'=> 'Base\Services\Factory\PhpArrayFactory',
            'Base\Services\Tradutor'=> 'Base\Services\Factory\TradutorFactory',
            //Serviços PagSeguro
            'Pg\Service\CreatePaymentRequest'=>'Pg\Service\Factory\CreatePaymentRequestFactory',
            'Pg\Service\PaymentMethodConfig'=>'Pg\Service\Factory\PaymentMethodConfigFactory',
            //Services Login Com Rede Social
            'Auth\Storage\SocialAuth'=>'Auth\Storage\Factory\SocialAuthFactory',
            'Auth\Storage\HybriStorage'=>'Auth\Storage\Factory\HybridStorageFactory',
            //Seviço de Authentication
            'Auth\Storage\IdentityManager'=>'Auth\Storage\Factory\IdentityManagerFactory',
            'Auth\Storage\AuthStorage'=>'Auth\Storage\Factory\AuthStorageFactory',
            'Auth\Acl\Acl'=>'Auth\Acl\Factory\AclFactory',
            'Auth\Model\Users\AuthRepository'=>'Auth\Model\Users\Factory\AuthRepositoryFactory',
            'Auth\Form\ForgothenPasswordFilter'=>'Auth\Form\Factory\ForgothenPasswordFilterFactory',
            'Auth\Form\ForgothenPasswordForm'=>'Auth\Form\Factory\ForgothenPasswordFormFactory',
            'Auth\Form\ProfileFilter'=>'Auth\Form\Factory\ProfileFilterFactory',
            'Auth\Form\ProfileForm'=>'Auth\Form\Factory\ProfileFormFactory',
            'Auth\Form\UpdatePasswordFilter'=>'Auth\Form\Factory\UpdatePasswordFilterFactory',
            'Auth\Form\UpdatePasswordForm'=>'Auth\Form\Factory\UpdatePasswordFormFactory',
            'Auth\Form\RegisterForm'=>'Auth\Form\Factory\RegisterFormFactory',
            'Auth\Form\RegisterFilter'=>'Auth\Form\Factory\RegisterFilterFactory',
            'Auth\Form\AuthForm'=>'Auth\Form\Factory\AuthFormFactory',
            'Auth\Form\AuthFilter' => 'Auth\Form\Factory\AuthFilterFactory',
            //TRADUÇÃO

        ],
        'invokables' => [

        ],
    ],
    'view_helpers' => [
        'invokables' => [

        ],
        'factories' => [
            'UserIdentity'=>'Auth\View\Helper\UserIdentityFactory'
        ]
    ],
    'controller_plugins'=>[
        'invokables' => [
          'SigaContas'=>'Base\Controller\Plugin\SigaContas'
        ],
        'factories' => [
            'PgCart'=>'Pg\Service\Factory\PgCartFactory',
            'IsAllowed'=>'Auth\Controller\Plugin\IsAllowedFactory'
        ]
    ],
    'controllers' => [
        'factories' => [
            'Auth\Controller\Auth' =>  'Auth\Controller\Factory\AuthControllerFactory',
            'Auth\Controller\Profile' => 'Auth\Controller\Factory\ProfileControllerFactory',
            'Auth\Controller\UpdatePassword' => 'Auth\Controller\Factory\UpdatePasswordControllerFactory',
            "Pg\Controller\Pg" => "Pg\Controller\Factory\PgControllerFactory",
            "Home\Controller\Home" => "Home\Controller\Factory\HomeControllerFactory",
           ],
    ],
    'zendcart' => [
        'vat' => '21',
        /**
         * If true, when insert is called and an item is already present in the cart (item with the same id attribute), an update is performed and the cart item quantity is updated.
         * false otherwise.
         * default: false, to mantain original ZendCart->insert() behaviour
         */
        'on_insert_update_existing_item' => false,
        'cart'=>'Cabecalho'
    ],

];