<?php

namespace App\Jobs;

class SampleJob
{
    public function handle()
    {
        sleep(2);
        echo "Sample job 1 executed successfully!";
    }
}
