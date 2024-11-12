<?php

if (!function_exists('runBackgroundJob')) {
    function runBackgroundJob($className, $methodName, ...$params)
    {

        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            // Windows
            $command = "start /B php -r \"require 'path/to/BackgroundJobRunner.php'; (new App\\BackgroundJobs\\BackgroundJobRunner())->run('$className', '$methodName', " . json_encode($params) . ");\"";
        } else {
            // Linux
            $command = "php -r \"require 'path/to/BackgroundJobRunner.php'; (new App\\BackgroundJobs\\BackgroundJobRunner())->run('$className', '$methodName', " . json_encode($params) . ");\" > /dev/null 2>&1 &";
        }

        exec($command);
    }
}
