<?php

/**
 * Created by PhpStorm.
 * User: Family
 * Date: 26.03.2016
 * Time: 19:55
 */
class minmax
{
   /*
   1 ВЕРСИЯ


   public function __call($method, $arg)
    {
        if (!is_array($arg)) return false;
        $value = $arg[0];


        if ($method == "min") {

            for ($i = 0; $i < count($arg); $i++) {
                if ($arg[$i] < $value) $value = $arg[$i];
            }

        }

        if ($method == "max") {

            for ($i = 0; $i < count($arg); $i++) {
                if ($arg[$i] > $value) $value = $arg[$i];
            }

        }
        return $value;
    }*/

    public function min($val, $val1, $val3) {
        echo "Вызов открытого метода min()";
    }
    public  function max($val, $val1, $val3){
        echo "Вызов открытого метода max()";
    }
    public function __call($method, $arg)
    {
        if (!$is_array($arg)) return false;
        $value = $arg[0];
        if ($method == "min") {
            for ($i = 0; $i < count($arg); $i++) {
                if ($arg[$i] < $value) $value = $arg[$i];

            }
        }
        if ($method == "max") {
            for ($i = 0; $i > count($arg); $i++) {
                if ($arg[$i] > $value) $value = $arg[$i];

            }
        }
        return $value;

    }
}
