<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Ecommerce\Form;

use Base\Form\AbstractForm;
use Ecommerce\Model\Categorias\CategoriasRepository;
use Ecommerce\Model\Marcas\MarcasRepository;
use Interop\Container\ContainerInterface;
use Ecommerce\Form\ProdutosFilter;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class ProdutosForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Ecommerce\Form\ProdutosForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Produtos', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(ProdutosFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
        //############################################ informações da coluna tipo ##############################################:
        $this->add([
                'type' => 'radio',//text,hidden, select, radio, checkbox, textarea
                'name' => 'tipo',
                'options' => [
                    'label' => 'FILD_TIPO_LABEL',
                    'value_options'      =>['0'=>'SERVIÇO','1'=>'PRODUTO'],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'TIPO'],
                    //'add-on-append'=>'aws-font'
                    'inline'=>true
                ],
                'attributes' => [
                    'id'=>'tipo',
                    //'class' =>'form-control',
                    'title' => 'FILD_TIPO_DESC',
                    'placeholder' => 'FILD_TIPO_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


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


        //############################################ informações da coluna subtitle ##############################################:
        $this->add([
                'type' => 'textarea',//text,hidden, select, radio, checkbox, textarea
                'name' => 'subtitle',
                'options' => [
                    'label' => 'FILD_SUBTITLE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'SUBTITLE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'subtitle',
                    'class' =>'form-control',
                    'title' => 'FILD_SUBTITLE_DESC',
                    'placeholder' => 'FILD_SUBTITLE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna catid ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'catid',
                'options' => [
                    'label' => 'FILD_CATID_LABEL',
                    'value_options'      =>$this->setValueOption(CategoriasRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'CATID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'catid',
                    'class' =>'form-control',
                    'title' => 'FILD_CATID_DESC',
                    'placeholder' => 'FILD_CATID_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna marca ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'marca',
                'options' => [
                    'label' => 'FILD_MARCA_LABEL',
                    'value_options'      =>$this->setValueOption(MarcasRepository::class),
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'MARCA'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'marca',
                    'class' =>'form-control',
                    'title' => 'FILD_MARCA_DESC',
                    'placeholder' => 'FILD_MARCA_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna unidade ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'unidade',
                'options' => [
                    'label' => 'FILD_UNIDADE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'UNIDADE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'unidade',
                    'class' =>'form-control',
                    'title' => 'FILD_UNIDADE_DESC',
                    'placeholder' => 'FILD_UNIDADE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pago ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pago',
                'options' => [
                    'label' => 'FILD_PAGO_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PAGO'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pago',
                    'class' =>'form-control real',
                    'title' => 'FILD_PAGO_DESC',
                    'placeholder' => 'FILD_PAGO_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna lucro ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'lucro',
                'options' => [
                    'label' => 'FILD_LUCRO_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'LUCRO'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'lucro',
                    'class' =>'form-control real',
                    'title' => 'FILD_LUCRO_DESC',
                    'placeholder' => 'FILD_LUCRO_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna valor ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'valor',
                'options' => [
                    'label' => 'FILD_VALOR_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'VALOR'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'valor',
                    'class' =>'form-control real',
                    'title' => 'FILD_VALOR_DESC',
                    'placeholder' => 'FILD_VALOR_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna peso ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'peso',
                'options' => [
                    'label' => 'FILD_PESO_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PESO'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'peso',
                    'class' =>'form-control',
                    'title' => 'FILD_PESO_DESC',
                    'placeholder' => 'FILD_PESO_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna altura ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'altura',
                'options' => [
                    'label' => 'FILD_ALTURA_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'ALTURA'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'altura',
                    'class' =>'form-control',
                    'title' => 'FILD_ALTURA_DESC',
                    'placeholder' => 'FILD_ALTURA_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna lagura ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'lagura',
                'options' => [
                    'label' => 'FILD_LAGURA_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'LAGURA'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'lagura',
                    'class' =>'form-control',
                    'title' => 'FILD_LAGURA_DESC',
                    'placeholder' => 'FILD_LAGURA_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna estoque ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'estoque',
                'options' => [
                    'label' => 'FILD_ESTOQUE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'ESTOQUE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'estoque',
                    'class' =>'form-control',
                    'title' => 'FILD_ESTOQUE_DESC',
                    'placeholder' => 'FILD_ESTOQUE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna minimo ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'minimo',
                'options' => [
                    'label' => 'FILD_MINIMO_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'MINIMO'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'minimo',
                    'class' =>'form-control',
                    'title' => 'FILD_MINIMO_DESC',
                    'placeholder' => 'FILD_MINIMO_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        $this->setAtachament([]);
        $this->setDescription([]);
        $this->setAccess([]);
        $this->setState([]);
        $this->setCreated([]);
        $this->setModified(["type" => "hidden"]);
        $this->setCsrf([]);
        $this->setSave([]);
    }


}