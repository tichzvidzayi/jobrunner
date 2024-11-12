<?php

namespace App\Http\Controllers;

class JobController extends Controller
{
    public function index()
    {
        // Fetch job logs from storage/logs/background_jobs.log
        if (file_exists(storage_path('logs/background_jobs.log'))) {
            $logs = file(storage_path('logs/background_jobs.log'));
        } else {
            $logs = [];
        }

        return view('jobs.index', ['logs' => array_reverse($logs)]);
    }
}
