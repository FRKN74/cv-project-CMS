<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\profil;
use App\Models\hakkimda;
use App\Models\iletisim;


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
        $profils = profil::all();
        $hakkimdas = hakkimda::all();
        $iletisims = iletisim::all();


        view()->share('profils', $profils);
        view()->share('hakkimdas', $hakkimdas);
        view()->share('iletisims', $iletisims);

    }
}
