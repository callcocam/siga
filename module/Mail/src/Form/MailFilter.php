<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Mail\Form;


use Base\Form\AbstractFilter;
use Interop\Container\ContainerInterface;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\EmailAddress;
use Zend\Validator\NotEmpty;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class MailFilter extends AbstractFilter
{

    /**
     * construct do Table
     *
     * @param ContainerInterface $container
     * @return \Mail\Form\MailFilter
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Form
        parent::__construct($containerInterface);
        $this->setDescription([]);
        //############################################ informações da coluna catid ##############################################:
        $this->add([
            'name' => 'title',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [NotEmpty::IS_EMPTY => "Campo Obrigatorio"]
                    ],
                ],
            ],
        ]);

        $this->add($this->factory->createInput([
            'name' => 'email',
            'required' => true,
            'validators' => [
                [
                    'name'=>NotEmpty::class,
                    'options'=>[
                        'messages'=>[NotEmpty::IS_EMPTY=>"Campo Obrigatorio"],
                    ]
                ],
                [
                    'name'=>EmailAddress::class,
                    'options'=>[
                        'messages'=>[EmailAddress::INVALID_FORMAT=>"O Formato Do Email Não E valido"],
                    ]
                ]

            ],
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ]

        ]));

        //############################################ informações da coluna subject ##############################################:
        $this->add([
            'name' => 'subject',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],

        ]);
    }

}