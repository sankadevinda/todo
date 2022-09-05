<?php

namespace domain\Facade;

use domain\Services\Todoservice;
use Illuminate\Support\Facades\Facade;

class TodoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Todoservice::class;
    }
}



