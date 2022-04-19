<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Support\ServiceProvider;

use App\Models\Faq;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        return View::share("data", ["faq" => Faq::GetAll(),"blogs" => Blog::GetAll()]);

    }
}
