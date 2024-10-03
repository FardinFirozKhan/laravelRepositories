<?php

namespace App\Providers;

use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\PostRepositoryInterface;

class RepostryServiesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}