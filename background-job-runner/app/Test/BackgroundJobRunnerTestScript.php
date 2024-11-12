<?php

require __DIR__ . '/../../vendor/autoload.php';

$app = require_once __DIR__ . '/../../bootstrap/app.php';

use App\BackgroundJobs\BackgroundJobRunner;

$runner = new BackgroundJobRunner();
$runner->run('App\Jobs\SampleJob', 'handle');
