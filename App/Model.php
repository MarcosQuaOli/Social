<?php

namespace App;

abstract class Model 
{

    public function __call($method, $value) 
    {
        return $this->get($method);
    }

    public function __set($params, $value) 
    {
        $this->$params = $value;
    } 

    public function setAll(Array $data)
    {

        foreach($data as $k=>$v) $this->__set($k, $v);

    }

    protected function get($method)
    {

        $property = lcfirst(substr($method, 3));

        if (method_exists($this, $method)) {

            return call_user_func_array(array($this, $method), array());

        } else if (property_exists($this, $property)) {

            return $this->{$property};

        } else {

            throw new InvalidArgumentException("Property {$property} not exists!");

        }

    }

    public function getAll()
    {

        $array = [];

        foreach ($this as $k => &$v) 
            $array[$k] = $v;

        return $array;

    }

}

?>