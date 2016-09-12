<?php
/**
 * Created by PhpStorm.
 * User: claudio
 * Date: 08/09/2016
 * Time: 13:29
 */

namespace Pg\Service;


use Zend\Hydrator\ClassMethods;

class Extract {

    public function exchangeArray($options=[]){
        $hydrate=new ClassMethods();
        $hydrate->hydrate($options,$this);
    }

    public function toArray(){
        $hydrate=new ClassMethods();
        return $hydrate->extract($this);
    }
} 