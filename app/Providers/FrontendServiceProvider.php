<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\FrontendComposer;

class FrontendServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }


    public function boot()
    {
        View::composer(['components.frontend.layout.partials.header'], FrontendComposer::class);

    }
}
