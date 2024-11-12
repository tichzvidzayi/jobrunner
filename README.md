# jobrunner
A custom Laravel 11x job runner


# Custom Background Job Runner for Laravel

## Installation

1. Clone this repository.
    ```php
  https://github.com/tichzvidzayi/jobrunner.git

    ```
2. Run 
``` php composer install ```.
3. Set up your .env file.


## Usage

To run a job in the background:

```php
runBackgroundJob('App\Jobs\SampleJob', 'handle');

```
## To test a job in the background

```php
php App\Test\BackgroundJobRunnerTestScript.php


```

If successful a log is added to /storage/logs/background_jobs.log 
Else is error /storage/logs/background_jobs_errors.log