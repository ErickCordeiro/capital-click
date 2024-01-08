<?php

namespace App\Providers;

use App\Models\Wallet;
use App\Repositories\WalletRepository;
use App\Services\WalletService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
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
