<?php

use Illuminate\Support\Facades\Route;

/**
 * 'admin' middleware and 'chart-of-accounts' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::admin('chart-of-accounts', function () {
    Route::get('/', function () {
        return view("chart-of-accounts::index");
    })->name("index");
    //Route::get('/', 'Main@index');
});

Route::admin('chart-of-accounts', function () {
    Route::get('/new-chart-of-accounts', function () {
        return view("chart-of-accounts::newChartOfAccounts");
    })->name("newChartOfAccounts");
    
});

