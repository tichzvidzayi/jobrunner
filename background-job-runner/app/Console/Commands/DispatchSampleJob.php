<?php

namespace App\Console\Commands;

use App\Jobs\SampleJob;
use Illuminate\Console\Command;

class DispatchSampleJob extends Command
{
    protected $signature = 'job:dispatch-sample';
    protected $description = 'Dispatch the Sample Job';

    public function handle()
    {
        dispatch(new SampleJob());
        $this->info('Sample Job 2 dispatched successfully!');
    }
}
