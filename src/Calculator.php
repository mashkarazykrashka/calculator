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
}
