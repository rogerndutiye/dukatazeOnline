<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
use App\category;

class DynamicCategoryName extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('category_arrayname',category::all()->where('status','1')); // array used to store all data from table

            //$category_get = DB::table('categories')->where('status','1')->get();
        });
    }
    public function categoryCount(){
        view()->composer('*',function($view){
            $view->with('category_Count',category::all()->count()); // array used to store all data from table

            //$category_get = DB::table('categories')->where('status','1')->get();
        });
    }
}
