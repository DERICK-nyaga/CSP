<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Navbar;
use App\Models\UserNav;
use Illuminate\Support\Facades\View;
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
        // $CompanyMenus = CompanyMenus::where('status', 'Enabled')->get();
        // view->share(navbars', $navbars);
        Paginator::useBootstrap();

        View::composer('*', function($view)
        {
            $usernav = UserNav::orderBy('ordering')->get();
            $view->with('usernav', $usernav);

            $navbars = Navbar::orderBy('ordering')->get();
            $view->with('navbars', $navbars);
        });
    }
}
