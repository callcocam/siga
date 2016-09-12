<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 08/09/2016
 * Time: 13:27
 */

namespace Pg\Service;


class ShippingAddress extends Extract {

    protected $postalCode = null;
    protected $street = null;
    protected $number = null;
    protected $complement = null;
    protected $district = null;
    protected $city = null;
    protected $state = null;
    protected $country = null;

    /**
     * @return null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param null $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return null
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * @param null $complement
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;
    }

    /**
     * @return null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param null $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return null
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param null $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @return null
     */
    public function getNumber()
    {
        return $this->number;
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
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param null $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param null $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return null
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param null $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }


} 