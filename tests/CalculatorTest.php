<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            10,
            $this->calc->sum(2, 3, 5),
            'wrong sum'
        );

        $this->assertEquals(
            27,
            $this->calc->pow(3, 3),
            'wrong pow'
        );

        $this->assertEquals(
            2,
            $this->calc->minus(5, 3),
            'wrong minus'
        );

        $this->assertEquals(
            4,
            $this->calc->multiplication(2, 2),
            'wrong multiplication'
        );

        $this->assertEquals(
            1,
            $this->calc->division(2, 2),
            'wrong division'
        );

        $this->assertEquals(
            1,
            $this->calc->proc(27, 2),
            'wrong proc'
        );

        $this->assertIsFloat($this->calc->proc(27, 2));
    
        $this->assertTrue($this->calc->test_sort([1,5,6]), 'not sorted');

        $this->assertTrue($this->calc->test_reverse([1,5,6]), 'not reversed');


    }

    protected function tearDown(): void
    {
    }
}
