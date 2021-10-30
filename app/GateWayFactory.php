<?php

namespace App;

use Exception;

class GateWayFactory
{

    /**
     * @param string $gateWayName
     *
     * @return Payping|Saman
     * @throws Exception
     */
    public static function PrepareGateWay(string $gateWayName)
    {
        switch($gateWayName)
        {
            /**
             * objects need to hav
             */
            case 'saman':
                return new Saman();
            case 'payping':
                return new Payping();
            default:
                throw new Exception('please choose valid bank gateway');
        }
    }

}
