<?php
namespace IEXBase\TronAPI\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class TronAPI.
 */
class TronAPI extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tron-api';
    }
}