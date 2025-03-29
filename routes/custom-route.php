<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Artisan;

Route::get('generate', function (){
return \Illuminate\Support\Facades\Artisan::call('storage:link');
})->name('generate');


Route::get('/clear-cache',function(){
 return Artisan::call('optimize:clear');
})->name("cache.clear");
?>