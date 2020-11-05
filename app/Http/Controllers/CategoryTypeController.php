<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category_type;
use App\category;
use DB;
class CategoryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
  {
    $this->middleware('auth');
  }
    public function index()
    {
        // $category_type_get =  DB::table('category_types')
        // ->select('category_types.category_type_name','category_types.category_id')
        // ->join('categories','categories.category_name','=','category_types.category_type_id')
        // ->get();
        $category_type_get = DB::table('category_types')
       ->join('categories', 'categories.id', '=', 'category_types.category_id')
       ->select('category_types.category_type_name','category_types.category_type_id','categories.category_name')
       ->where('category_types.status','1')
       ->get();
        //  $category_type_get = DB::table('category_types')->where('status','1')->get();
        //$category_type_get=category_type::all();
        return view('categorytype/categorytypeManage')->with('category_manager_type',$category_type_get);
    }
    
    public function getSave(){
        $cat_name = DB::table('categories')->where('status','1')->get();
        return view('categorytype/categorytypeSave')->with('cat_name_get',$cat_name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'category_type_name' => 'required',
            'category_id' => 'required',
            ]);
        $category_type = new category_type();
        $category_type->category_type_name = request('category_type_name');
        $category_type->category_id = request('category_id');
        $category_type->status =1;
        $category_type->save();
        return redirect('/categoryTypeManage')->with('response','Category type Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        
        DB::table('category_types')->where('category_type_id', $id)->update([
            'status' => 0
            ]);
        // DB::table('category_types')->where('category_type_id',$id)
        // ->delete();
        return redirect('/categoryTypeManage')->with('response','Category Type Deleted Successfully');
    }
    public function destroy($id)
    {
        //
    }
}
