<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Admin\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Admin\Form\CategoriasFilter;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class CategoriasForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Admin\Form\CategoriasForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Categorias', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(CategoriasFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
                    //############################################ informações da coluna parent_id ##############################################:
        		    $this->add([
        	                   'type' => 'text',//text,hidden, select, radio, checkbox, textarea
        	                    'name' => 'parent_id',
        	                    'options' => [
                     	'label' => 'FILD_PARENT_ID_LABEL',
                    	//'value_options'      =>[],
        				//'disable_inarray_validator' => true,
        				//'label_attributes'=>['class'=>'control-label','for'=>'PARENT_ID'],
        				//'add-on-append'=>'aws-font'
         ],
        	                    'attributes' => [
                'id'=>'parent_id',
                'class' =>'form-control',
                'title' => 'FILD_PARENT_ID_DESC',
                'placeholder' => 'FILD_PARENT_ID_PLACEHOLDER',
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
        
        
                    //############################################ informações da coluna images ##############################################:
        		    $this->add([
        	                   'type' => 'text',//text,hidden, select, radio, checkbox, textarea
        	                    'name' => 'images',
        	                    'options' => [
                     	'label' => 'FILD_IMAGES_LABEL',
                    	//'value_options'      =>[],
        				//'disable_inarray_validator' => true,
        				//'label_attributes'=>['class'=>'control-label','for'=>'IMAGES'],
        				//'add-on-append'=>'aws-font'
         ],
        	                    'attributes' => [
                'id'=>'images',
                'class' =>'form-control',
                'title' => 'FILD_IMAGES_DESC',
                'placeholder' => 'FILD_IMAGES_PLACEHOLDER',
                //'readonly' => true/false,
                //'requerid' => true/false,
                'data-access' => '3',
                'data-position' => 'images',
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