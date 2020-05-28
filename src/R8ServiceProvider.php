<?php

namespace Secrethash\R8;

use Illuminate\Support\ServiceProvider;

class R8ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $timestamp = date('Y_m_d_His', time());
        $this->publishes([
            __DIR__.'/../database/migrations/create_reviews_table.php.stub' => $this->app->databasePath()."/migrations/{$timestamp}_create_reviews_table.php",
            __DIR__.'/../database/migrations/create_review_types_table.php.stub' => $this->app->databasePath()."/migrations/{$timestamp}_create_review_types_table.php",
        ], 'migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}