<?php

class cls{

    public $arr = array();

    public function __get($index)
    {
        return $this->arr[$index];
    }

    public function __set($index, $value)
    {

    $this->arr[$index] = $value;

    }

    public function  __isset($index){
       return isset($this->arr[$index]);
    }
    private function __unset($index)
    {
       unset($this->arr[$index]);
    }
}