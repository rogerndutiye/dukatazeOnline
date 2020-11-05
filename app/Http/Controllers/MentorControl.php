<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentor;
use DB;


class MentorControl extends Controller
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
        $mentor_get = DB::table('mentors')
       ->where('status','1')
       ->get();
        // $product_get=product::all();
        return view('carrertrajectory/MentorManage')->with('mentor_manage',$mentor_get);
    }
    // public function getSave(){
        
    //     return view('product/productSave');
    // }

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
            'mentor_title'=> 'required',
            'mentor_firstname' => 'required',
            'mentor_lastname' => 'required',
            'mentor_gender' => 'required',
            'mentor_email' => 'required',
            'mentor_phone'=>'required',
            'mentor_address'=>'required',
            'mentor_qualification'=>'required',
            
            ]);
        $mentor = new Mentor();
        $mentor->mentor_title = request('mentor_title');
        $mentor->mentor_firstname = request('mentor_firstname');
        $mentor->mentor_lastname = request('mentor_lastname');
        $mentor->mentor_gender = request('mentor_gender');
        $mentor->mentor_email = request('mentor_email');
        $mentor->mentor_phone = request('mentor_phone');
        $mentor->mentor_address = request('mentor_address');
        $mentor->mentor_qualification= request('mentor_qualification');
        $mentor->status =1;
        $mentor->save();
        return redirect('/mentorManage')->with('response','Mentor Saved Successfully');
    }
    public function getCattype(){
        $cat_name_type = DB::table('category_types')->where('status','1')->get();
        return view('product/productSave')->with('cat_type_name_get',$cat_name_type);
    }
    public function getSave(){
        return view('carrertrajectory/mentorSave');
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
