<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Auth\Form;

use Base\Form\AbstractFilter;
use Interop\Container\ContainerInterface;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\NotEmpty;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class UsersFilter extends AbstractFilter
{

    /**
     * construct do Table
     *
     * @return \Auth\Form\UsersFilter
     * @param ContainerInterface $containerInterface
     */
    public function __construct(ContainerInterface $containerInterface)
    {
        // Configurações iniciais do Form
        parent::__construct($containerInterface);
        $this->setId([]);
       
        //############################################ informações da coluna title ##############################################:
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



        //############################################ informações da coluna cnpj ##############################################:
        $this->add([
            'name' => 'cnpj',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [],
        ]);

        //############################################ informações da coluna email ##############################################:
        $this->add([
            'name' => 'email',
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


        //############################################ informações da coluna phone ##############################################:
        $this->add([
            'name' => 'phone',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [
            ],
        ]);

 
        //############################################ informações da coluna images ##############################################:
        $this->add([
            'name' => 'images',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators' => [ ],
        ]);

  
        //############################################ informações da coluna role_id ##############################################:
        $this->add([
            'name' => 'role_id',
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
        $this->setAtachament([]);
        $this->setDescription([]);
        $this->setAccess([]);
        $this->setState([]);
        $this->setModified([]);
        $this->setCreated([]);
    }


}

