<?php


use App\Repositories\Test;

Route::get('/index', function(){
    Test::sum();
});
////Result: 30

//Route::get('/another', function(){
//    Test::another_sum();
//});
//Result: 100
