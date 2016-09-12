<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Mail\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class MailForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @param ContainerInterface $container
     * @param string $name
     * @param array $options
     * @return \Mail\Form\MailForm
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Contato', array $options = array())
    {
        $this->class='';
        $this->containerInterface = $containerInterface;
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setInputFilter($containerInterface->get(MailFilter::class));
        // Configurações iniciais do Form
        $this->setAttribute('class','');
        $this->setDescription([]);
        $this->setCsrf([]);


          //############################################ informações da coluna title ##############################################:
        $this->add([
                'type' => 'text',//hidden, select, radio, checkbox, textarea
                'name' => 'title',
                'options' => [
                    'label' => 'FILD_TITLE_CONTATO_LABEL',
                 ],
                'attributes' => [
                    'id'=>'title',
                    'class' =>'form-control',
                    'title' => 'FILD_TITLE_CONTATO_DESC',
                    'placeholder' => 'FILD_TITLE_CONTATO_PLACEHOLDER',
                    'requerid' => true,
                ],
            ]
        );

        //############################################ informações da coluna title ##############################################:
        $this->add([
                'type' => 'email',//hidden, select, radio, checkbox, textarea
                'name' => 'email',
                'options' => [
                     'label' => 'FILD_EMAIL_CONTATO_LABEL',
                    ],
                'attributes' => [
                    'id'=>'email',
                    'class' =>'form-control',
                    'title' => 'FILD_TITLE_CONTATO_DESC',
                    'placeholder' => 'FILD_EMAIL_CONTATO_PLACEHOLDER',
                     'requerid' => true,
                ],
            ]
        );

        //############################################ informações da coluna subject ##############################################:
        $this->add([
                'type' => 'text',//hidden, select, radio, checkbox, textarea
                'name' => 'subject',
                'options' => [
                'label' => 'FILD_TITLE_LABEL',
                 ],
                'attributes' => [
                    'id'=>'subject',
                    'class' =>'form-control',
                    'title' => 'FILD_SUBJECT_DESC',
                    'placeholder' => 'FILD_SUBJECT_PLACEHOLDER',

                ],
            ]
        );


    }


}

