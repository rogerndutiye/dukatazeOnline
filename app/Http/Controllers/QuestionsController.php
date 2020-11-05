<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\questions;
use App\RepledQuestion;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuestionMail;
class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
  {
    $this->middleware('auth', ['except' => [
        'indexpub', 'store','getSave','getReply'
    ]]);
  } 
    public function index()
    {
        $question_get = DB::table('questions')->orderby('created_at','desc')->get();
        return view('questions/questionManage')->with('question_manager',$question_get);
    }
    public function indexpub()
    {
        $question_get = DB::table('questions')->where('status','1')->get();

        return view('frontend/questions')->with('question_manager',$question_get);
    }
    
    public function getReply($id)
    {
        $question = DB::table('questions')->where('id',$id)->first();
        
        $repled_questions = DB::table('repled_questions')->where('question_id',$id)->get();
        return view('frontend/replyQuestions',compact('question','repled_questions'));
    }
    public function getSave(){
        return view('questions/questionSave');
    }
   
    public function delete($id)
    {
         
        DB::delete('delete from questions where id = ?',[$id]);
      
        return redirect('/questionManage')->with('response','Stories  deleted Successfully');
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
       
        $questions_replyed = new RepledQuestion();
        $questions_replyed->question_id = request('question_id');
        $questions_replyed->reply_message = request('reply_message');
        $questions_replyed->status =1;
        $questions_replyed->save();
        DB::table('questions')
            ->where('id','id')
            ->update(['reply_action' => 0]);

           
         questions::where('id','=',request('question_id')) 
         ->update([
            'reply_action' => 1
        ]); 
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
        $question_get_reply = questions::findOrFail($id);
        return view('questions.questionReply',compact('question_get_reply'));  
    }
    public function store(Request $request){
        $request->validate([ 
            'question_title' => 'required|string|unique:questions',
            'question_description' => 'required|string|unique:questions',
            
            ]);
            $questions = new questions();
        $questions->full_name = request('full_name');
        $questions->address = request('address');
        $questions->question_title = request('question_title');
        $questions->question_description= request('question_description');
        $questions->status =1;
        $questions->reply_action=0;
        $questions->save();

        $toEmail = "dukatazeonline@gmail.com"; 
        Mail::to($toEmail)->send(new QuestionMail($request->all()));

        return redirect('/questions')->with('response','Question Send Successfully');
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
}
