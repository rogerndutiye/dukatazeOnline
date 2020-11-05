<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\questions;
use App\stories;
use App\product;
use App\work;
use DB; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
                     $questions = DB::table('questions')
                     ->select(DB::raw('count(*) as question_count, status'))
                     ->where('status', '!=', 0)
                     ->groupBy('status')
                     ->get();
                     $data=array(
                         'question' =>questions::count(),
                         'stories' =>stories::count(),
                         'product' =>product::count(),
                         'work' =>work::count()
                     );  
        return view('home',compact('data'));
       
    }
   
}
