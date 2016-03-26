<?php

/**
 * Created by PhpStorm.
 * User: Family
 * Date: 26.03.2016
 * Time: 22:24
 */
class employments
{
    public function __construct($firstName ,$patronymic ,$secondName ,$age = 18)
    {
        $this->firstName = $firstName;
        $this->patronymic = $patronymic;
        $this->secondName = $secondName;
        $this->age = $age;
    }

    public function __toString()
    {
      return "{$this->firstName} {$this->patronymic} {$this->secondName}" ;
    }
    public function __get($index)
    {
        return $this->$index;
    }

    public $firstName;
    private $patronymic;
    public $secondName;
    public $age;
}