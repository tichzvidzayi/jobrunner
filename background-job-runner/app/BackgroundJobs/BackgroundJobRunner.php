<?php

namespace App\BackgroundJobs;

use Exception;

class BackgroundJobRunner
{
    private $logFile;
    private $errorLogFile;

    public function __construct()
    { // save to log files if successful or not successful
        $this->logFile = storage_path('logs/background_jobs.log');
        $this->errorLogFile = storage_path('logs/background_jobs_errors.log');
        // create file if it doesn't exist
        if (!file_exists($this->logFile)) {
            file_put_contents($this->logFile, "Log file created.\n");
        }
        if (!file_exists($this->errorLogFile)) {
            file_put_contents($this->errorLogFile, "Error log file created.\n");
        }
    }

    public function run($className, $methodName, ...$params)
    {

        $maxRetries = 5; //  attempts to run the job
        for ($attempt = 0; $attempt <= $maxRetries; $attempt++) {
            try {
                if (!$this->isValidClass($className) || !$this->isValidMethod($className, $methodName)) {
                    throw new Exception("Invalid class or method");
                }

                $instance = new $className();
                call_user_func_array([$instance, $methodName], $params);
                $this->log("Executed {$className}::{$methodName} successfully.");
                return;

            } catch (Exception $e) {
                if ($attempt === $maxRetries) {
                    $this->logError("Max retries reached for {$className}::{$methodName}: " . $e->getMessage());
                } else {
                    sleep(2);
                    continue;
                }
            }
        }
    }

    private function log($message)
    { // log to file including timestamp
        file_put_contents($this->logFile, date('Y-m-d H:i:s') . " - " . $message . PHP_EOL, FILE_APPEND);
    }

    private function logError($message)
    {
        file_put_contents($this->errorLogFile, date('Y-m-d H:i:s') . " - " . $message . PHP_EOL, FILE_APPEND);
    }

    private function isValidClass($className)
    {
        return true;
    }

    private function isValidMethod($className, $methodName)
    {
        return method_exists($className, $methodName);
    }
}
