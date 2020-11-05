<?php

namespace App\Http\Controllers;
use DB;
use App\Carrertrajector;
use App\Mentor;

use Illuminate\Http\Request;

class CarrerTrajectorController extends Controller
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
           $carrer_get = DB::table('carrertrajectors')
          ->where('status','1')
          ->get();
           // $product_get=product::all();
           return view('carrertrajectory/carrerManage')->with('carrer_manage',$carrer_get);
       }
       // public function getSave(){
           
       //     return view('product/productSave');
       // }
   
       /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function getMentor(){
            $mentor_get = DB::table('mentors')
          ->where('status','1')
          ->get();
           // $product_get=product::all();
           return view('carrertrajectory/carrerSave')->with('mentor_name',$mentor_get);
        }
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
               'carrer_firstname'=>'required',
               'carrer_lastname' => 'required',
               'dateofbirth' => 'required',
               'gender' => 'required',
               'carrer_passion' => 'required',
               'mentor_id'=>'required',
               'phone'=>'required',
               'email'=>'required',
               
               ]);
           $carrertrajector = new Carrertrajector();
           $carrertrajector->carrer_firstname = request('carrer_firstname');
           $carrertrajector->carrer_lastname = request('carrer_lastname');
           $carrertrajector->dateofbirth = request('dateofbirth');
           $carrertrajector->gender= request('gender');
           $carrertrajector->carrer_passion = request('carrer_passion');
           $carrertrajector->mentor_id = request('mentor_id');
           $carrertrajector->phone = request('phone');
           $carrertrajector->email = request('email');
           $carrertrajector->status =1;
           $carrertrajector->save();
           return redirect('/carrerManage')->with('response','Carrer Saved Successfully');
       }
       public function getCattype(){
           $cat_name_type = DB::table('category_types')->where('status','1')->get();
           return view('product/productSave')->with('cat_type_name_get',$cat_name_type);
       }
       public function getSave(){
           return view('carrertrajectory/carrerSave');
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
       public function destroy($id)
       {
           //
       }
       public function delete($id){
           // DB::table('products')->where('product_id',$id)
           // ->delete();
           DB::table('products')->where('product_id', $id)->update([
               'status' => 0
               ]);
           return redirect('/productManage')->with('response','Product Deleted Successfully');
       }
   }
   