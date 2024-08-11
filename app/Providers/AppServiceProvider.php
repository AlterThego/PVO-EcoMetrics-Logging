<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        DB::listen(function($query) {
            $formattedQuery = sprintf(
                '[%s] %s | Time: %s ms | Bindings: [%s]',
                date('Y-m-d H:i:s'),
                $query->sql,
                $query->time,
                implode(', ', $query->bindings)
            );
        
            File::append(
                storage_path('logs/query.log'),
                $formattedQuery . PHP_EOL
            );
        });
        
    }
}
