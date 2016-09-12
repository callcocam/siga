<?php
return ['pag-seguro'=>
    [
        /* Ambiente: */

        /**
         * aceita os valores production e sandbox
         */
        'PAGSEGURO_ENV' => "sandbox",
        /**
         * e-mail cadastrado.
         */
        'PAGSEGURO_EMAIL' => "callcocam@gmail.com",
        /**
         * token gerado no PagSeguro
         */
        'PAGSEGURO_TOKEN_PRODUCTION' => "your_production_token",
        /**
         * token gerado no Sandbox.
         */
        'PAGSEGURO_TOKEN_SANDBOX'  => "BEFA9E61638143A39CEAA12C0175D324",
        /**
         *  ID da aplicação criada no PagSeguro
         */
        'PAGSEGURO_APP_ID_PRODUCTION' => "your_production_application_id",
        /**
         * ID da aplicação criada no Sandbox.
         */
        'PAGSEGURO_APP_ID_SANDBOX'  => "app0642178461",
        /**
         * Chave da aplicação criada no PagSeguro.
         */
        'PAGSEGURO_APP_KEY_PRODUCTION' =>  "your_production_application_key",
        /**
         * Chave da aplicação criada no Sandbox.
         */
        'PAGSEGURO_APP_KEY_SANDBOX' => "67EEB64EC0C0C350046DEFAE4C9D3BCA",
        /**
         * codificação do seu sistema (ISO-8859-1 ou UTF-8).
         */
        'PAGSEGURO_CHARSET' => "UTF-8",
        /**
         * ativa/desativa a geração de logs.
         */
        'PAGSEGURO_LOG_ACTIVE' => false,
        /**
         * local onde o arquivo de log será gravado. Ex.: ../PagSeguroLibrary/logs.txt
         */
        'PAGSEGURO_LOG_LOCATION' => "",

        'payment-method-config'=>[
            'discount-per-payment-method'=>[
                // Add discount per payment method
                ['CREDIT_CARD', 1.00, 'DISCOUNT_PERCENT'],
                ['EFT', 2.90, 'DISCOUNT_PERCENT'],
                ['BOLETO', 10.00, 'DISCOUNT_PERCENT'],
                ['DEPOSIT', 3.45, 'DISCOUNT_PERCENT'],
                ['BALANCE', 0.01, 'DISCOUNT_PERCENT'],
                // Add installment without addition per payment method
                ['CREDIT_CARD', 6, 'MAX_INSTALLMENTS_NO_INTEREST'],
                // Add installment limit per payment method
                ['CREDIT_CARD', 8, 'MAX_INSTALLMENTS_LIMIT']
            ],
            'group-add-payment-methods'=>[
                //['CREDIT_CARD','DEBITO_ITAU'],
            ],
            'remove-group-payment-methods'=>[
              //  ['BOLETO','BOLETO']
            ],
            'checkout-metadata-information'=>[

            ]

        ],
        'redirecturl'=>'/retorno',
        'notification-url'=>'/notification'
    ]
];