<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Auth\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class RegisterForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return \Auth\Form\RegisterForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Profile', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(RegisterFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);

        //############################################ informações da coluna identifier ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'identifier',
                'options' => [
                    //'label' => 'FILD_IDENTIFIER_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'IDENTIFIER'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'identifier',
                    //'class' =>'form-control',
                    //'title' => 'FILD_IDENTIFIER_DESC',
                    //'placeholder' => 'FILD_IDENTIFIER_PLACEHOLDER',
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


        //############################################ informações da coluna cnpj ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'cnpj',
                'options' => [
                    //'label' => 'FILD_CNPJ_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'CNPJ'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                   'id'=>'cnpj',
                    //'class' =>'form-control',
                    //'title' => 'FILD_CNPJ_DESC',
                    //'placeholder' => 'FILD_CNPJ_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna gender ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'gender',
                'options' => [
                    //'label' => 'FILD_GENDER_LABEL',
                    //'value_options'      =>['indefinido'=>'Indefinido','male'=>"Homem",'femele'=>"Mulher"],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'GENDER'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'gender',
                    //'class' =>'form-control',
                    //'title' => 'FILD_GENDER_DESC',
                    //'placeholder' => 'FILD_GENDER_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna age ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'age',
                'options' => [
                    //'label' => 'FILD_AGE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'AGE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'age',
                    //'class' =>'form-control',
                    //'title' => 'FILD_AGE_DESC',
                    //'placeholder' => 'FILD_AGE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna birthDay ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'birthDay',
                'options' => [
                    //'label' => 'FILD_BIRTHDAY_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'BIRTHDAY'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'birthDay',
                    //'class' =>'form-control',
                    //'title' => 'FILD_BIRTHDAY_DESC',
                    //'placeholder' => 'FILD_BIRTHDAY_PLACEHOLDER',
                    'value' => '0',
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna birthMonth ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'birthMonth',
                'options' => [
                    //'label' => 'FILD_BIRTHMONTH_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'BIRTHMONTH'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'birthMonth',
                    //'class' =>'form-control',
                    //'title' => 'FILD_BIRTHMONTH_DESC',
                    //'placeholder' => 'FILD_BIRTHMONTH_PLACEHOLDER',
                    'value' => '0',
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna email ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'email',
                'options' => [
                    'label' => 'FILD_EMAIL_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'EMAIL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'email',
                    'class' =>'form-control',
                    'title' => 'FILD_EMAIL_DESC',
                    'placeholder' => 'FILD_EMAIL_PLACEHOLDER',
                    //'readonly' => true,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna phone ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'phone',
                'options' => [
                    'label' => 'FILD_PHONE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PHONE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'phone',
                    'class' =>'form-control',
                    'title' => 'FILD_PHONE_DESC',
                    'placeholder' => 'FILD_PHONE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna username ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'username',
                'options' => [
                    //'label' => 'FILD_USERNAME_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'USERNAME'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'username',
                    //'class' =>'form-control',
                    //'title' => 'FILD_USERNAME_DESC',
                    //'placeholder' => 'FILD_USERNAME_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );



        //############################################ informações da coluna password ##############################################:
        $this->add([
                'type' => 'password',//text,hidden, select, radio, checkbox, textarea
                'name' => 'password',
                'options' => [
                    'label' => 'FILD_PASSWORD_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PASSWORD'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'password',
                    'class' =>'form-control',
                    'title' => 'FILD_PASSWORD_DESC',
                    'placeholder' => 'FILD_PASSWORD_PLACEHOLDER',
                    //'readonly' => true,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

        //############################################ informações da coluna usr_password_confirm ##############################################:
        $this->add(
            [
                'type' => 'password',
                'name' => 'usr_password_confirm',
                'options' => [
                    // 'label' => 'FIL_USER_CONFIRM_LABEL',
                ],
                'attributes' => [
                    'id' => 'usr_password_confirm',
                    'title' => 'FILD_USER_CONFIRM_DESC',
                    'class' => 'form-control input-sm',
                    'placeholder' => 'FILD_USER_CONFIRM_PLACEHOLDER',
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna role_id ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'role_id',
                'options' => [
                    //'label' => 'FILD_ROLE_ID_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'ROLE_ID'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'role_id',
                    'class' =>'form-control',
                    'title' => 'FILD_ROLE_ID_DESC',
                    'placeholder' => 'FILD_ROLE_ID_PLACEHOLDER',
                    'readonly' => true,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        $this->setAtachament([]);
        $this->setCaptha([]);
        $this->setDescription([]);
        $this->setAccess(["type" => "hidden"]);
        $this->setState(["type" => "hidden"]);
        $this->setCreated(["type" => "hidden"]);
        $this->setModified(["type" => "hidden"]);
        $this->setCsrf([]);
        $this->setSave([ 'name' => 'save',
            'type' => 'button',
            'attributes' => ['type' => 'submit','class'=>'btn btn-primary btn-block'],
            'options' => [
                'label' => 'CADASTRAR-SE',
                'column-size' => 'sm-12',
                'add-on-append'=>'floppy-o'
            ]
        ]);

    }
}