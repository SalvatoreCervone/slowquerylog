<?php

namespace salvatorecervone\Slowquerylog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \salvatorecervone\Slowquerylog\Slowquerylog
 */
class Slowquerylog extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \salvatorecervone\Slowquerylog\Slowquerylog::class;
    }
}
