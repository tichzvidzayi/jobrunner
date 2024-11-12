<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('dispatch:sample-job', function () {
    $this->call(DispatchSampleJob::class);
});

// Scheduling the command to run every 3 hours
Schedule::command('dispatch:sample-job')->everyTwoMinutes();
