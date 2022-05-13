<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class CustomServiceProvider extends ServiceProvider
{

    public function register()
    {
        app()->bind('calculation', function(){
            return new \App\Repositories\calculation;
        });
    }

}

//‘providers’ => []:
//App\Providers\CustomServiceProvider::class,

//‘aliases’ => []:
//'Test' => App\Repositories\TestFacades::class,
