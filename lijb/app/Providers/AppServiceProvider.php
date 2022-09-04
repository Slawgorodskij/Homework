<?php

namespace App\Providers;

use App\Cache\Enums\CacheData;
use App\Services\AddCache;
use App\Services\GetCache;
use App\Services\SortServices;
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
        $this->app->bind(SortServices::class);
        $this->app->bind(AddCache::class);
        $this->app->bind(GetCache::class);
        $this->app->bind(CacheData::class);
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
