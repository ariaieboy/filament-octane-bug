<?php

namespace App\Providers;

use Filament\Tables\Columns\Column;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Column::configureUsing(function (Column $col){
            $col->label(fn()=>"id".$col->getName());
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
