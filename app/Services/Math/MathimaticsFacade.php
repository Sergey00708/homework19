<?php
namespace App\Services\Math;

use Illuminate\Support\Facades\Facade;

class MathimaticsFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'math';
    }
}