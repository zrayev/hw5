<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 04.11.15
 * Time: 12:52
 */
use Geron\Geron;

class GeronTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider checkProvider
     * @param $a
     * @param $b
     * @param $c
     */
    public function testСheck($a, $b, $c)
    {
        $calc0 = new Geron();
        $this->assertTrue($calc0->check($a, $b, $c));
    }

    /**
     * @return array
     */
    public function checkProvider()
    {
        return [
            [4, 5, 7],
        ];
    }

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
            [8, 4, 5, 7],
        ];
    }

    /**
     * @dataProvider calcGeronProvider
     * @param $ex
     * @param $a
     * @param $b
     * @param $c
     * @param $p
     */
    public function testCalcGeron($ex, $a, $b, $c, $p)
    {
        $calc2 = new Geron();
        $this->assertEquals($ex, $calc2->calcGeron($a, $b, $c, $p));
        $this->assertTrue($ex == '72');
    }

    /**
     * @return array
     */
    public function calcGeronProvider()
    {
        return [
            //  [9, 4, 5, 7, 6],
            [72, 5, 29, 30, 32],
        ];
    }


    /**
     * @dataProvider testtestsValuesPProvider
     * @param $ex
     * @param $a
     * @param $b
     * @param $c
     */
    public function testtestValues($ex, $a, $b, $c)
    {
        $calc3 = new Geron();
        $this->assertLessThanOrEqual($calc3->testsValues($a, $b, $c), $ex);
    }

    /**
     * @return array
     */
    public function testtestsValuesPProvider()
    {
        return [
            [[4, 5, 6], 4, 5, 6]
        ];
    }

}
