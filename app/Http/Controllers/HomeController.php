<?php
namespace App\Http\Controllers;

use App\Services\Math\Mathimatics;
use App\Services\Math\MathimaticsFacade;

class HomeController
{
    public function Home(Mathimatics $math, $a, $b)
    {
        // $math = app(Mathimatics::class); // Достали класс без регистрации сервиса с помощю депенденс иньекшн
        $result = MathimaticsFacade::sum($a,$b); // вызов статического метода через фасад
        // $result = \Math::sum($a,$b); // зарегистрировал алиас для фасада вывод через \
        // $math = app('math'); достаем из апп контейнера по ключу
        // $sum = $math->sum($a, $b);
        // return $sum;
        return $result;
    }
}