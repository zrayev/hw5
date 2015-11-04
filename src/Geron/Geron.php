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
     * @return float
     */
    public function calcP ($a, $b, $c)
    {
        $p = ($a + $b +$c)/2;
        return $p;
    }

    /**
     * @param $p
     * @param $a
     * @param $b
     * @param $c
     * @return float
     */
    public function calcGeron($p, $a, $b, $c)
    {
        $s = sqrt($p*($p-$a)*($p-$b)*($p-$c));
        return $s;
    }
}