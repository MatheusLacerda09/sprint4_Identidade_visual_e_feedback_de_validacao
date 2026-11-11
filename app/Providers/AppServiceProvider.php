<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Pagination\Paginator;
=======
>>>>>>> cf28424dc35bb2b55f79ba90174c93dd151872c3
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        Schema::defaultStringLength(191);
<<<<<<< HEAD

        // A aplicação usa Bootstrap 5; sem isso o links() sai com markup Tailwind
        Paginator::useBootstrapFive();
=======
>>>>>>> cf28424dc35bb2b55f79ba90174c93dd151872c3
    }
}
