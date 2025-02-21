<?php

namespace Weldon\EnvAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Weldon\EnvAuth\Skeleton\SkeletonClass
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
        return \Weldon\EnvAuth\EnvAuth::class;
    }
}
