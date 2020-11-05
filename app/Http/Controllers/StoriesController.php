<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\stories;
use Illuminate\Support\Facades\Input;

class StoriesController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth');
  }
    //
    public function index()
    {
        // $stories_get = DB::table('stories')->get();
        $stories_get=stories::all();
        return view('stories/storiesManage')->with('stories_manager',$stories_get);
    }
    public function getSave(){
        return view('stories/storiesSave');
    }

    public function setStatus($id,$status)
    {
        stories::where('storie_id','=',$id) 
         ->update([
            'status' => $status
        ]); 
        return redirect('/storiesManage')->with('response','Status changing  Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editone($id)
    {
        $story =  stories::where('storie_id', '=',$id)->first();
        return view('stories/storiesEdit')->with('story',$story);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function reply(Request $request)
    {
        $request->validate([
            ]);
        $stories = new stories();
        $stories->storie_title = request('storie_title');
        $stories->storie_description = request('storie_description');
        $stories->status =1; 

        $stories->save();
        DB::table('questions')
            ->where('id','id')
            ->update(['reply_action' => 0]);
        return redirect('/questionManage')->with('response','Question Replyed Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function edit($id)
    {
        $question_get_reply = questions::findOrFail($id);
        return view('questions.questionReply',compact('question_get_reply'));  
    }
    public function store(Request $request){
        $request->validate([
            'storie_title_kinya'=> 'required',
            'storie_description_kinya' => 'required',
            'storie_title_eng'=> 'required',
            'storie_description_eng' => 'required',
            
            ]);
            $stories = new stories();
            $stories->storie_title_eng = request('storie_title_eng');
            $stories->storie_description_eng = request('storie_description_eng');
            $stories->storie_title_kinya = request('storie_title_kinya');
            $stories->storie_description_kinya = request('storie_description_kinya');
            $stories->status=1;
             
        if (Input::hasFile('image') ){
            $file=Input::file('image');
            $file->move(public_path().'/stories_images/',$file->getClientOriginalName());
            $stories->image=$file->getClientOriginalName();
        }   
            $stories->save();
        return redirect('/storiesManage')->with('response','Stories  Send Successfully');
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
        $request->validate([
            'storie_title_kinya'=> 'required',
            'storie_description_kinya' => 'required',
            'storie_title_eng'=> 'required',
            'storie_description_eng' => 'required',
            
            ]); 

            stories::where('storie_id','=',$id) 
                    ->update([
                        'storie_title_eng' => request('storie_title_eng'),
                        'storie_title_kinya' => request('storie_title_kinya'),
                        'storie_description_eng' =>request('storie_description_eng'),
                        'storie_description_kinya' => request('storie_description_kinya'),
                    ]); 

        return redirect('/storiesManage')->with('response','Stories  Send Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyStory($id)
    {
         
        DB::delete('delete from stories where storie_id = ?',[$id]);
      
        return redirect('/storiesManage')->with('response','Stories  deleted Successfully');
    }
    public function delete($id){
        // DB::table('products')->where('product_id',$id)
        // ->delete();
        DB::table('stories')->where('storie_id', $id)->update([
            'status' => 0
            ]);
        return redirect('/storiesManage')->with('response','Storie Deleted Successfully');
    }
}
