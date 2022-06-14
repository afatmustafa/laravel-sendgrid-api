<?php

namespace Afatmustafa\LaravelSendgridApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Afatmustafa\LaravelSendgridApi\LaravelSendgridApi
 */
class LaravelSendgridApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-sendgrid-api';
    }
}
