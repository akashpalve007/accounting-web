<?php
use App\Http\Controllers\Test1PageController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;


/**
 * 'web' middleware applied to all routes
 *
 * @see \App\Providers\Route::mapWebRoutes
 */

 Livewire::setScriptRoute(function ($handle) {
    $base = request()->getBasePath();

    return Route::get($base . '/vendor/livewire/livewire/dist/livewire.min.js', $handle);
  
    


});

Route::get('/test1', [Test1PageController::class, 'show'])->name('test1');
