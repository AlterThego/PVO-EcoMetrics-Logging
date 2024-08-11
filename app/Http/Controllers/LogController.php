<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LogController extends Controller
{
    public function showLogs()
    {
        // Read the log file
        $logFile = storage_path('logs/query.log');
        $logs = File::exists($logFile) ? File::get($logFile) : '';

        // Split logs into an array, each entry as a separate line
        $logEntries = array_filter(explode(PHP_EOL, $logs));

        // Pass the logs to the view
        return view('logs.index', ['logs' => $logEntries]);
    }
}

