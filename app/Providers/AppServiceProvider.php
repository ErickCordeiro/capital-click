<?php

namespace App\Providers;

use App\Repositories\UserRepository;
use App\Repositories\WalletRepository;
use App\Services\UserService;
use App\Services\WalletService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserService::class, function ($app) {
            return new UserService(new UserRepository());
        });

        $this->app->bind(WalletService::class, function ($app) {
            return new WalletService(new WalletRepository());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
