<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 03.11.15
 * Time: 22:42
 */
require_once 'vendor/autoload.php';
use Calculator\Calculator;

//use PHPUnit_Framework_TestCase;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider addProvider
     * @param $ex
     * @param $a
     * @param $b
     */
    public function testAdd($ex, $a, $b)
    {
        $calc = new Calculator();
        $this->assertEquals($ex, $calc->add($a, $b));
        $this->assertTrue(true);
    }

    /**
     * @dataProvider multiplProvider
     * @param $ex
     * @param $a
     * @param $b
     */
    public function testMultipl($ex, $a, $b)
    {
        $calc = new Calculator();
        $this->assertEquals($ex, $calc->multipl($a, $b));
    }

    public function addProvider()
    {
        return [
            [6, 3, 3],
            [4, 2, 2],
            [8, 5, 3],
            [9, 3, 6],
        ];
    }

    public function multiplProvider()
    {
        return [
            [6, 2, 3],
            [10, 2, 5],
            [12, 6, 2],
        ];
    }
}