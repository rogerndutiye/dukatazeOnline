<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\categories;
use App\category_types;
use App\stories;
use App\Carrertrajector;
use DB;
use Illuminate\Support\Facades\Input;
use App\work;

use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyActionMail;
use App\Mail\OrderMail;
class IndexController extends Controller
{
    public function index(){
        return view('index');
    }
    public function productView()
    {
        $product_get = DB::table('products')
       ->join('categories', 'categories.id', '=', 'products.category_id')
       ->join('category_types', 'category_types.category_type_id', '=', 'products.category_type_id')
       ->select('products.product_name','products.product_id','products.price','products.product_image', 'categories.category_name', 'category_types.category_type_name')
       ->where('products.status','1')
       ->get(); 
        return view('frontend/productview')->with('productView',$product_get);
    }
    public function getVision()
    {
        return view('frontend/vision');
    }
    public function getMission()
    {
        return view('frontend/mission');
    }
    public function getStories()
    {
        $stories = stories::where('status', '1')->get();
        return view('frontend/healthStorieView')->with('stories',$stories);
    }
    public function getsave(){

    }
   public function getSaveCarrer(){

    $works = work::where('status', '1')
            ->orderBy('created_at', 'Desc')
            ->paginate(10); 
        return view('frontend/carrertrajectory')->with('works',$works);
    }
    public function storeCarrer(Request $request)
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
           return redirect('careertrajectory')->with('response','Career Trajectory Saved Successfully');
       }
       public function getCattype(){
           $cat_name_type = DB::table('category_types')->where('status','1')->get();
           return view('product/productSave')->with('cat_type_name_get',$cat_name_type);
       }

       public function sendFeedback()
        {
        $comment = 'Hi, This test feedback.';
        $toEmail = "dukatazeonline@gmail.com";
        $action="Order";
        Mail::to($toEmail)->send(new NotifyActionMail($comment));
        
        return 'Email has been sent to '. $toEmail;
        }

        public function sendorder(Request $request)
        { 
        $toEmail = "dukatazeonline@gmail.com";  
        Mail::to($toEmail)->send(new OrderMail($request->all()));
        
        return redirect('productview')->with('response','Your order has been send Successfully');
        }
}
