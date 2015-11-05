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
            [6, 2, 4, 6],
            [7, 4, 3, 7],
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

    public function calcGeronProvider()
    {
        return [
            //  [9, 4, 5, 7, 6],
            [72, 5, 29, 30, 32],
        ];
    }

   /*  public function testCalcGeron2($ex, $a, $b, $c, $p)
    {
        $calc2 = new Geron();
        $this->assertEquals($ex, $calc2->calcGeron($a, $b, $c, $p));
        $this->assertTrue($ex == '72');
    }
*/
/*

    public function testFailure3()

    {   $calc6 = new Geron();
        $this->assertFalse($calc6->calcP($a));
    }

    public function testFailure3Provider()
    {
        return false;
    }
*/

}
