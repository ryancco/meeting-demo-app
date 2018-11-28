<?php

namespace Tests;

use demo\Calculator;

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    /** @var Calculator */
    private $calculator;

    public function setUp()
    {
        parent::setUp();

        $this->calculator = new Calculator();
    }

    /** @test */
    public function itSubtractsNumbers()
    {
        $result = $this->calculator->subtract(7, 21);

        self::assertEquals(14, $result);
    }

    /**
     * @test
     * @expectedException TypeError
     */
    public function itDoesNotAllowAddingStringsToIntegers()
    {
        $result = $this->calculator->add('foo', 5);
    }

    /**
     * @test
     * @dataProvider providesNumbers
     */
    public function itCanAddInfiniteAmountsOfNumbers(int...$numbers)
    {
        $result = $this->calculator->add(...$numbers);

        self::assertInternalType('int', $result);
    }

    /**
     * @test
     * @expectedException Exception
     */
    public function itCannotAddOneNumberAlone()
    {
        $result = $this->calculator->add(12);
    }

    /**
     * @test
     * @dataProvider providesFactors
     */
    public function itMultipliesNumbers($number1, $number2)
    {
        $expected = $number1 * $number2;

        self::assertEquals($expected, $this->calculator->multiply($number1, $number2));
    }

    public function providesFactors()
    {
        return [
            'One times two' => [1, 2],
            'Ten times five' => [10, 5],
            'Twenty times six' => [20, 6],
            'Twenty-one times seven' => [21, 7],
        ];
    }

    public function providesNumbers()
    {
        return [
            [10, 10, 10, 203, 555],
            [12, 128],
        ];
    }
}
