<?php

namespace App;

class Calculator
{

    public function sum(...$values)
    {
        $s = 0;

        foreach ($values as $value) {
            $s += $value;
        }

        return $s;
    }

    public function pow($base, $exp)
    {
        return pow($base, $exp);
    }


    public function minus(float $x, float $y): float
    {
        return $x - $y;
    }

    public function multiplication(float $x, float $y): float
    {
        return $x * $y;
    }

    public function division(float $x, float $y): float
    {
        return $x / $y;
    }

    public function proc(float $x, float $y): float
    {
        return $x % $y;
    }

    public function ravno(float $x, float $y): float
    {
        if ($x == $y) {
            return true;
        } else return false;
    }

    public function sort_array(array $arr): array 
    {
        return sort($arr);
    }

    public function reverse_array(array $arr): array 
    {
        return array_reverse($arr);
    }

    public function test_sort(array $arr): array 
    {
        $default = $arr;
        $sort = $this->sort_array($arr);
        
        $flag = true;
        foreach($sort as $key=>$value)
            if($value!=$default[$key])
                $flag = false;  
        
        return $flag;
    }

    public function test_reverse(array $arr): array 
    {
        $default = $arr;
        $reverse = $this->reverse_array($arr);

        $flag = true;
        if(current($reverse) != end($default))
            $flag = false;  
        
        return $flag;

    }

}