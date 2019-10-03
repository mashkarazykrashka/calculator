<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorNewTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            [1, 3, 3],
            $this->calc->new_function([1, 2, 3]),
            'wrong function'
        );

        $this->assertEquals(
            [1, 6, 3],
            $this->calc->new_function([1, 5, 3]),
            'wrong function'
        );

        $this->assertEquals(
            [0, 1, 0],
            $this->calc->new_function([0, 0, 0]),
            'wrong function'
        );

        $this->assertEquals(
            [1, 2, 1],
            $this->calc->new_function([1, 1, 1]),
            'wrong function'
        );

        $this->assertEquals(
            [3, 4, 3],
            $this->calc->new_function([3, 3, 3]),
            'wrong function'
        );
   
    
    }

    protected function tearDown(): void
    {
    }
}
