# Job Runner

A custom Laravel 11.x job runner.

## Custom Background Job Runner for Laravel

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