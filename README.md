# Job Runner

A scalable and secure custom job runner for Laravel 11x applications, allowing for background execution of PHP classes independently of Laravel's built-in queue system. This job runner supports error handling, configurable retries, logging, and an optional web-based dashboard.

## Features

- Custom Background Execution: Run PHP classes as background jobs outside of Laravel's built-in queue system.
- Cross-Platform Support: Execute jobs on both Windows and Unix-based systems.
- Error Handling and Logging: Capture and log errors in a separate log file with status tracking (e.g., running, completed, failed).
- Retry Mechanism: Configurable retry attempts for failed jobs.
- Security: Validate class and method names and restrict background execution to pre-approved classes.
- Optional Advanced Features: Web-based dashboard for job status monitoring, job delays, and priority-based execution.

### Installation

1. Clone this repository:
    ```bash
    git clone https://github.com/tichzvidzayi/jobrunner.git
    ```
2. Run the following command to install dependencies:
    ```bash
    composer install
    ```
3. Set up your `.env` file.

### Usage

To run a job in the background, use the following command:

```php
runBackgroundJob('App\Jobs\SampleJob', 'handle');


```

### To test the backgroundjob run the following command

```bash
    php App/Test/BackgroundJobRunnerTestScript.php

```
