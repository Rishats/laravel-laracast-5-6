<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

/**
 * New Collision Reporting.
 * Just write in console: php artisan inspire.
 */
Artisan::command('inspire', function () {
    throw new Exception('Heyy!!');
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
