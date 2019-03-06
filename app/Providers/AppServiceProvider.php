<?php

namespace App\Providers;

use App\Custom\MainMenu;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(MainMenu $mainMenu)
    {
        View::share('mainMenu', $mainMenu->buildMenu());
        View::share('tags', Tag::all());
        View::share( 'categories', Category::with('posts')->get());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
