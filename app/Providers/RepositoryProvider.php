<?php

namespace App\Providers;

use App\Repository\ProductInterface;
use App\Repository\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind([
            ProductInterface::class,
            ProductRepository::class,
        ]);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
