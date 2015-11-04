<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 04.11.15
 * Time: 12:52
 */
require_once 'vendor/autoload.php';
use Geron\Geron;

class GeronTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $ex
     * @param $a
     * @param $b
     * @param $c
     */
    public function TestCalcP($ex, $a, $b, $c)
    {
        /** @var TYPE_NAME $calc1 */
        $calc1 = new Geron();
        $this->assertEquals($ex, $calc1->calcP($a, $b, $c));
        $this->assertTrue(true);
    }

    /**
     * @return array
     */
    public function calcPProvider()
    {
        return [
            [12, 2, 3, 7 ],
            [12, 2, 4, 6],
            [7, 4, 3, 7],
        ];
    }
}