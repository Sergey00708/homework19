<?php
namespace App\Services\Math;

use Illuminate\Support\ServiceProvider;
use Psr\SimpleCache\CacheInterface;

class MathimaticsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('math', function(){
            return new Mathimatics();
        });
        // $this->app->singleton('math', function(){
        //     return new Mathimatics();
        // });

    }

    public function boot(CacheInterface $cache)
    {
        // $math = new Mathimatics($cache);
        // $this->app->instance('math', $math); // Так лучше регистрировать, чтобы внедрить еще одну зависимость
    }
}