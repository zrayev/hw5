<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 04.11.15
 * Time: 12:38
 */
namespace Geron;

class Geron
{

    /**
     * @param $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function check($a, $b, $c)
    {
        if ($a <= 0 || $b <= 0 || $c <= 0)
            return FALSE;
        else {
            return TRUE;
        }
    }

    /**
     * @param $a
     * @param $b
     * @param $c
     * @return float
     */
    public function calcP($a, $b, $c)
    {
        $p = ($a + $b + $c) / 2;
        return $p;
    }

    /**
     * @param $p
     * @param $a
     * @param $b
     * @param $c
     * @return float
     */
    public function calcGeron($a, $b, $c, $p)
    {
        $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
        return $s;
    }

    /**
     * @param $a
     * @param $b
     * @param $c
     * @return array
     */
    public function testsValues($a, $b, $c)
    {
        $a1 = $a + $b;
        $a2 = $a + $c;
        $a3 = $c + $b;

        return array($a1, $a2, $a3);
    }

}
