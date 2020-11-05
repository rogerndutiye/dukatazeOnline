<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\categories;
use App\category_type;
use DB;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
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
        $product_get = DB::table('products')
       ->join('categories', 'categories.id', '=', 'products.category_id')
       ->join('category_types', 'category_types.category_type_id', '=', 'products.category_type_id')
       ->select('products.product_name','products.status','products.product_id','products.price','products.product_image', 'categories.category_name', 'category_types.category_type_name')
       ->get();
        // $product_get=product::all();
        return view('product/productManage')->with('product_manage',$product_get);
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
            'product_name'=> 'required|string',
            'category_type_id' => 'required|integer',
            'category_id' => 'required|integer',
            'price' => 'required|integer',
            'product_image' => 'required',
            'description'=>'required|string'
            ]);
        $product = new product();
        $product->product_name = request('product_name');
        $product->category_id = request('category_id');
        $product->category_type_id = request('category_type_id');
        $product->price= request('price');
         if (Input::hasFile('product_image') ){
            $file=Input::file('product_image');
            $file->move(public_path().'/uploads/',$file->getClientOriginalName());
            $product->product_image=$file->getClientOriginalName();
        $product->description = request('description');
        $product->status =0;
        $product->save();
        return redirect('/productManage')->with('response','Product Saved Successfully');
    }
}
    public function getCattype(){
        $cat_name_type = DB::table('category_types')->where('status','1')->get();
        return view('product/productSave')->with('cat_type_name_get',$cat_name_type);
    }
    public function getSave(){
        return view('product/productSave');
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

   
    public function publish($id,$status)
    {
        product::where('product_id','=',$id) 
         ->update([
            'status' => $status
        ]); 
        return redirect('/productManage')->with('response','Status changing Successfully');
   
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
    public function destroy($id)
    {
        //
    }
    public function delete($id){
       
            DB::delete('delete from products where product_id = ?',[$id]);
        return redirect('/productManage')->with('response','Product Deleted Successfully');
    }
}
