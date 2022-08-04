<?php

namespace App\Providers;

use App\Services\Storage\RedisStorage;
use App\Services\Storage\StorageInterface;
use App\Services\Visits\Visits;
use App\Services\Visits\VisitsInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StorageInterface::class, RedisStorage::class);
        $this->app->bind(VisitsInterface::class, Visits::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
