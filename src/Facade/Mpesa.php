<?php
namespace Ivantoz\Mpesa\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Mpesa
 * @package Ivantoz\Mpesa\Facade
 */
class Mpesa extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Mpesa';
    }


}