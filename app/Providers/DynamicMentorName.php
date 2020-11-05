<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
use App\Mentor;

class DynamicMentorName extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('mentor_arrayname',Mentor::all()->where('status','1')); // array used to store all data from table

            //$category_get = DB::table('categories')->where('status','1')->get();
        });
    }
}
