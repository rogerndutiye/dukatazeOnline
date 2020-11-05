<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
use App\category_type;

class DynamicCategoryType extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('category_type_arrayname',category_type::all()->where('status','1')); // array used to store all data from table
        });
    }
}
