<?php

namespace App\Providers;

use App\Services\SMSService;
use App\Services\EmailService;
use App\Interface\MassageSender;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(MassageSender::class, function($app){
            return collect([
                'email' => app(EmailService::class),
                'sms' => app(SMSService::class)
            ]);
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