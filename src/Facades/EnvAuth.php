<?php

namespace Usmonaliyev\EnvAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Usmonaliyev\EnvAuth\Skeleton\SkeletonClass
 */
class EnvAuth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return \Usmonaliyev\EnvAuth\EnvAuth::class;
    }
}
