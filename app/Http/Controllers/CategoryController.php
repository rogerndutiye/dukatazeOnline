<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use DB;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth');
  }
    public function index(){
        $category_get = DB::table('categories')->where('status','1')->get();
        // $category_get=category::all();
        return view('category/categoryManage')->with('category_manager',$category_get);
    }
    public function store(Request $request)
    {
        //dd(request('minsalary'));
        $request->validate([
            'category_name' => 'required',
            ]);
        $category = new category();
        $category->category_name = request('category_name');
        $category->status = 1;
        $category->save();
        return redirect('/categoryManage')->with('response','Category Saved Successfully');
    }
    public function edit($id)
    {
        $categorys = category::findOrFail($id);
         return view('category.categoryEdit',compact('categorys'));  
    }
    // public function update(Request $request)
    // {
    //     $rules = array(
	// 		'category_name'       => 'required',
	// 	);
	// 	$validator = Validator::make(Input::all(), $rules);

    //     if ($validator->fails()) {
    //         echo "hello";
	// 	} else {
	// 		// store
	// 		$category =category::find('id');
	// 		$category->category_name = Input::get('category_name');
	// 		$category->status = 0;
	// 		$nerd->save();
	// 		// redirect
    //         return redirect('/categoryManage')->with('response','Category updated Successfully');
	// 	}
  
       
    // }
    public function update(Request $request,$id)

    { 
        $this->validate($request,[
            'category_name' => 'required',
        ]);
        $categorys = category::findOrFail($request->$id);
        $categorys->category_name = $request->get('category_name');
        //$functType->functionType = request('functionType');
        // DB::table('category')
        //     ->where('id', $id)
        //     ->update(['category_name' => $category ]);
        $categorys->save();
        return redirect()->back()->with('response','Question Updated Successfully');
        //function->functionname = request('functionname');

       /* $data =
        [
            'function_name' => $request->function_name,
            'min_salary' => $request->min_salary,
            'max_salary' => $request->max_salary,
        ];
        DB::table('funct_types')->where($funct_id,$request->funct_id)->update($data);
        ;*/
        
    }
    public function getSave(){
        return view('category/categorySave');
    }
    public function delete($id){
        // DB::table('categories')->where('id',$id)
        // ->delete();
        DB::table('categories')->where('id', $id)->update([
            'status' => 0
            ]);
        return redirect('/categoryManage')->with('response','Category Updated Successfully');
    }
}
