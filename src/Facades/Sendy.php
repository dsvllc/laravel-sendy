<?php

namespace Dsvllc\Sendy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Sendy
 *
 * @package Dsvllc\Sendy\Facades
 */
class Sendy extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Dsvllc\Sendy\Sendy';
    }
}
