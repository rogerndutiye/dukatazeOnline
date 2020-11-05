<?php

namespace App\Http\Controllers;

use App\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class WorkController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = DB::table('works')->orderBy('id', 'Desc')->get();
        
        return view('works.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
         
        $request->validate([
            'title'=> 'required|string',
            'status' => 'required|integer',  
            'image' => 'required',
            'description'=>'required|string'
            ]);

        $product = new work();
        $product->title = request('title');
        $product->status = request('status'); 
         if (Input::hasFile('image') ){
            $file=Input::file('image');
            $file->move(public_path().'/works_images/',$file->getClientOriginalName());
            $product->image=$file->getClientOriginalName();
        $product->description = request('description'); 
        $product->save();
        return redirect('/our-works')->with('response','Work Saved Successfully');
    }
    }

    public function setStatus($id,$status)
    {
        work::where('id','=',$id) 
         ->update([
            'status' => $status
        ]); 
        return redirect('/our-works')->with('response','Status changing  Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(work $work)
    {
        //
    }

    public function destroyStory($id)
    {
         
        DB::delete('delete from works where id = ?',[$id]);
      
        return redirect('/our-works')->with('response','Stories  deleted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(work $work)
    {
        //
    }
}
