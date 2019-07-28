<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/28
 * Time: 14:14
 */

namespace Zch\ZchJunitLaravel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ZchjunitServiceProvide extends ServiceProvider
{

    public function boot()
    {
        $this->registerRoutes();
        $this->loadViewsFrom(
          __DIR__ . '/../../resources/views/', 'Zchjunit'
        );
    }

    private function routeConfiguration(){
        return [
           'namespace' => 'Zch\ZchJunitLaravel\Http\Controllers',
           'prefix' => 'Zchjunit',
           'middleware' => 'web'
        ];
    }

    public function registerRoutes()
    {
        Route::group($this->routeConfiguration(),function(){
            $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
        });
    }
}