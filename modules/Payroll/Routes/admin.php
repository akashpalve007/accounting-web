<?php
use Illuminate\Support\Facades\Route;

/**
 * 'admin' middleware and 'payroll' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::admin('payroll', function () {
    $routes = [
        '/' => 'index',
        '/payroll-dashboard' => 'payrollDashboard',
        '/show-employee' => 'showEmployee',
        '/new-employee' => 'newEmployee',
        '/new-pay-calendar' => 'newPayCalendar',
        '/pay-calendars' => 'payCalendars',
        '/employee-details' => 'employeeDetails',
        '/run-payroll' => 'runPayroll',
        '/run-payroll-advance' => 'runPayrollAdvance',
        '/run-payroll-stepper' => 'runPayrollStepper',
    ];

    foreach ($routes as $uri => $name) {
        Route::get($uri, function () use ($name) {
            return view("payroll::$name");
        })->name($name);
    }
});

