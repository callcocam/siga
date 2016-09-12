<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Admin\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Admin\Form\TraductionFilter;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class TraductionForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Admin\Form\TraductionForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Traduction', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(TraductionFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
        //############################################ informações da coluna title ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'title',
                'options' => [
                    'label' => 'FILD_TITLE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'TITLE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'title',
                    'class' =>'form-control',
                    'title' => 'FILD_TITLE_DESC',
                    'placeholder' => 'FILD_TITLE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna placeholder ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'placeholder',
                'options' => [
                    'label' => 'FILD_PLACEHOLDER_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PLACEHOLDER'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'placeholder',
                    'class' =>'form-control',
                    'title' => 'FILD_PLACEHOLDER_DESC',
                    'placeholder' => 'FILD_PLACEHOLDER_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna dica_tela ##############################################:
        $this->add([
                'type' => 'textarea',//text,hidden, select, radio, checkbox, textarea
                'name' => 'dica_tela',
                'options' => [
                    'label' => 'FILD_DICA_TELA_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'DICA_TELA'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'dica_tela',
                    'class' =>'form-control',
                    'title' => 'FILD_DICA_TELA_DESC',
                    'placeholder' => 'FILD_DICA_TELA_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        $this->setDescription([]);
        $this->setAccess([]);
        $this->setState([]);
        $this->setCreated([]);
        $this->setModified(["type" => "hidden"]);
        $this->setCsrf([]);
        $this->setSave([]);
        $this->setSaveCopy([]);
    }


}