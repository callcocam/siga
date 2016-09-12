<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Pg\Form;

use Base\Form\AbstractForm;
use Interop\Container\ContainerInterface;
use Pg\Form\PgassinaturasFilter;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class PgassinaturasForm extends AbstractForm
{

    /**
     * construct do Table
     *
     * @return  \Pg\Form\PgassinaturasForm
     * @param ContainerInterface $containerInterface
     * @param string $name
     * @param array $options
     */
    public function __construct(ContainerInterface $containerInterface, $name = 'Pgassinaturas', array $options = array())
    {
        // Configurações iniciais do Form;
        parent::__construct($containerInterface, $name, $options);
        $this->setAttribute("id","Manager");
        $this->setInputFilter($containerInterface->get(PgassinaturasFilter::class));
        $this->setId([]);
        $this->setAssetid([]);
        $this->setCodigo([]);
        $this->setEmpresa([]);
        //############################################ informações da coluna title ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'title',
                'options' => [
                    // 'label' => 'FILD_TITLE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'TITLE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'title',
                    // 'class' =>'form-control',
                    // 'title' => 'FILD_TITLE_DESC',
                    // 'placeholder' => 'FILD_TITLE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pre_approval_details ##############################################:
        $this->add([
                'type' => 'textarea',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_details',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_DETAILS_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_DETAILS'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_details',
                    'class' =>'form-control',
                    'title' => 'FILD_PRE_APPROVAL_DETAILS_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_DETAILS_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pre_approval_name ##############################################:
        $this->add([
                'type' => 'textarea',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_name',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_NAME_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_NAME'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_name',
                    'class' =>'form-control',
                    'title' => 'FILD_PRE_APPROVAL_NAME_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_NAME_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pre_pproval_charge ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_pproval_charge',
                'options' => [
                    'label' => 'FILD_PRE_PPROVAL_CHARGE_LABEL',
                    'value_options'      =>['auto'=>"AUTMOTICO",'manual'=>'MANUAL'],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_PPROVAL_CHARGE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_pproval_charge',
                    'class' =>'form-control',
                    'title' => 'FILD_PRE_PPROVAL_CHARGE_DESC',
                    'placeholder' => 'FILD_PRE_PPROVAL_CHARGE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

        // WEEKLY para toda semana;
        // MONTHLY para todo mês;
        // BIMONTHLY para a cada dois meses;
        // TRIMONTHLY para cada três meses;
        // SEMIANNUALLY a cada seis meses.
        //YEARLY para cada ano;


        //############################################ informações da coluna pre_approval_period ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_period',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_PERIOD_LABEL',
                    'value_options'      =>[
                        ''=> '--SELECIONE--',
                        'WEEKLY'=> 'Para toda semana [ WEEKLY ]',
                        'MONTHLY'=> 'Para todo mês [ MONTHLY ]',
                        'BIMONTHLY'=> 'Ppara a cada dois meses [ BIMONTHLY ]',
                        'TRIMONTHLY'=> 'Para cada três meses [ TRIMONTHLY ]',
                        'SEMIANNUALLY'=> 'A cada seis meses [ SEMIANNUALLY ]',
                        'YEARLY'=>'Para cada ano [ YEARLY ]'
                    ],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_PERIOD'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_period',
                    'class' =>'form-control',
                    'title' => 'FILD_PRE_APPROVAL_PERIOD_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_PERIOD_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pre_approval_Initialdate ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_Initialdate',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_INITIALDATE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_INITIALDATE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_Initialdate',
                    'class' =>'form-control datetime',
                    'title' => 'FILD_PRE_APPROVAL_INITIALDATE_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_INITIALDATE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'value'=>date('d-m-Y H:i:s'),
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //MONDAY para toda Segunda-Feira;
    //TUESDAY para toda Terça-Feira;
    //WEDNESDAY para toda Quarta-Feira;
    //THURSDAY para toda Quinta-Feira;
    //FRIDAY para toda Sexta-Feira;
    //SATURDAY para todo Sábado;
    //SUNDAY para todo Domingo;

        //############################################ informações da coluna pre_approval_dayofweek ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_dayofweek',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_DAYOFWEEK_LABEL',
                    'value_options'      =>[
                        ''=>'--SELECIONE--',
                        'MONDAY'=>'Para toda Segunda-Feira [ MONDAY ]',
                        'TUESDAY'=>'Para toda Terça-Feira [ TUESDAY ]',
                        'WEDNESDAY'=>'Para toda Quarta-Feira [ WEDNESDAY ]',
                        'THURSDAY'=>'Para toda Quinta-Feira [ THURSDAY ]',
                        'FRIDAY'=>'Para toda Sexta-Feira [ FRIDAY ]',
                        'SATURDAY'=>'Para todo Sábado [ SATURDAY ]',
                        'SUNDAY'=>'Para todo Domingo [ SUNDAY ]'
                    ],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_DAYOFWEEK'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_dayofweek',
                    'class' =>'form-control datetime',
                    'title' => 'FILD_PRE_APPROVAL_DAYOFWEEK_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_DAYOFWEEK_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pre_pproval_dayofmonth ##############################################:
        $this->add([
                'type' => 'select',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_pproval_dayofmonth',
                'options' => [
                    'label' => 'FILD_PRE_PPROVAL_DAYOFMONTH_LABEL',
                    'value_options'      =>[
                        '01'=>'--01--',
                        '02'=>'--02--',
                        '03'=>'--03--',
                        '04'=>'--05--',
                        '06'=>'--06--',
                        '07'=>'--07--',
                        '08'=>'--08--',
                        '09'=>'--09--',
                        '10'=>'--10--',
                        '11'=>'--11--',
                        '12'=>'--12--',
                        '13'=>'--13--',
                        '14'=>'--14--',
                        '15'=>'--15--',
                        '16'=>'--16--',
                        '17'=>'--17--',
                        '18'=>'--18--',
                        '19'=>'--19--',
                        '20'=>'--20--',
                        '21'=>'--21--',
                        '22'=>'--22--',
                        '23'=>'--23--',
                        '24'=>'--24--',
                        '25'=>'--25--',
                        '26'=>'--26--',
                        '27'=>'--27--',
                        '28'=>'--28--'
                    ],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_PPROVAL_DAYOFMONTH'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_pproval_dayofmonth',
                    'class' =>'form-control',
                    'title' => 'FILD_PRE_PPROVAL_DAYOFMONTH_DESC',
                    'placeholder' => 'FILD_PRE_PPROVAL_DAYOFMONTH_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pre_approval_dayofyear ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_dayofyear',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_DAYOFYEAR_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_DAYOFYEAR'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_dayofyear',
                    'class' =>'form-control datetime',
                    'title' => 'FILD_PRE_APPROVAL_DAYOFYEAR_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_DAYOFYEAR_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );

        $vencimento=strtotime (date("d-m-Y H:i:s")." +1 month" );
        //############################################ informações da coluna pre_approval_final_date ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_final_date',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_FINAL_DATE_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_FINAL_DATE'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_final_date',
                    'class' =>'form-control datetime',
                    'title' => 'FILD_PRE_APPROVAL_FINAL_DATE_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_FINAL_DATE_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'value'=>date ( 'd-m-Y H:i:s',$vencimento),
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pre_approval_amount_per_payment ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_amount_per_payment',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_AMOUNT_PER_PAYMENT_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_AMOUNT_PER_PAYMENT'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_amount_per_payment',
                    'class' =>'form-control real',
                    'title' => 'FILD_PRE_APPROVAL_AMOUNT_PER_PAYMENT_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_AMOUNT_PER_PAYMENT_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pre_approval_max_total_amount ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_max_total_amount',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_MAX_TOTAL_AMOUNT_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_MAX_TOTAL_AMOUNT'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_max_total_amount real',
                    'class' =>'form-control',
                    'title' => 'FILD_PRE_APPROVAL_MAX_TOTAL_AMOUNT_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_MAX_TOTAL_AMOUNT_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna pre_approval_max_amount_per_period ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'pre_approval_max_amount_per_period',
                'options' => [
                    'label' => 'FILD_PRE_APPROVAL_MAX_AMOUNT_PER_PERIOD_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'PRE_APPROVAL_MAX_AMOUNT_PER_PERIOD'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'pre_approval_max_amount_per_period',
                    'class' =>'form-control real',
                    'title' => 'FILD_PRE_APPROVAL_MAX_AMOUNT_PER_PERIOD_DESC',
                    'placeholder' => 'FILD_PRE_APPROVAL_MAX_AMOUNT_PER_PERIOD_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna redirect_url ##############################################:
        $this->add([
                'type' => 'hidden',//text,hidden, select, radio, checkbox, textarea
                'name' => 'redirect_url',
                'options' => [
                   // 'label' => 'FILD_REDIRECT_URL_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'REDIRECT_URL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'redirect_url',
                    //'class' =>'form-control',
                   // 'title' => 'FILD_REDIRECT_URL_DESC',
                   // 'placeholder' => 'FILD_REDIRECT_URL_PLACEHOLDER',
                    //'readonly' => true/false,
                    //'requerid' => true/false,
                    'data-access' => '3',
                    'data-position' => 'geral',
                ],
            ]
        );


        //############################################ informações da coluna review_url ##############################################:
        $this->add([
                'type' => 'text',//text,hidden, select, radio, checkbox, textarea
                'name' => 'review_url',
                'options' => [
                    'label' => 'FILD_REVIEW_URL_LABEL',
                    //'value_options'      =>[],
                    //'disable_inarray_validator' => true,
                    //'label_attributes'=>['class'=>'control-label','for'=>'REVIEW_URL'],
                    //'add-on-append'=>'aws-font'
                ],
                'attributes' => [
                    'id'=>'review_url',
                    'class' =>'form-control',
                    'title' => 'FILD_REVIEW_URL_DESC',
                    'placeholder' => 'FILD_REVIEW_URL_PLACEHOLDER',
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