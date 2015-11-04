<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 04.11.15
 * Time: 12:52
 */
use Geron\Geron;

class GeronTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider calcPProvider
     * @param $ex
     * @param $a
     * @param $b
     * @param $c
     */
    public function testCalcP($ex, $a, $b, $c)
    {
        $calc1 = new Geron();
        $this->assertEquals($ex, $calc1->calcP($a, $b, $c));
    }

    /**
     * @return array
     */
    public function calcPProvider()
    {
        return [
            [6, 2, 3, 7 ],
            [6, 2, 4, 6],
            [7, 4, 3, 7],
        ];
    }
}