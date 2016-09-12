<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 08/09/2016
 * Time: 12:51
 */

namespace Pg\Service;


use Zend\Hydrator\ClassMethods;

class Customer extends Extract {

    protected $name;
    protected $email = null;
    protected $areaCode = null;
    protected $number = null;
    protected $documentType = null;
    protected $documentValue = null;


    /**
     * @param null $areaCode
     */
    public function setAreaCode($areaCode)
    {
        $this->areaCode = $areaCode;
    }

    /**
     * @param null $documentType
     */
    public function setDocumentType($documentType)
    {
        $this->documentType = $documentType;
    }

    /**
     * @param null $documentValue
     */
    public function setDocumentValue($documentValue)
    {
        $this->documentValue = $documentValue;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param null $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return null
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }

    /**
     * @return null
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @return null
     */
    public function getDocumentValue()
    {
        return $this->documentValue;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null
     */
    public function getNumber()
    {
        return $this->number;
    }




} 