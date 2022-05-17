<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class QuestionController extends Controller
{
    //create_question function start
    public function all_question(){
      
        $all_questions = Question::select('id', 'question', 'option_one' , 'option_two', 'option_three' , 'option_four')->get();
        return view("backend.modules.questions.index" , compact('all_questions'));
    }
    //create_question function ends

    public function create_question(){
        return view("backend.modules.questions.create");
    }

    public function add(Request $request){
        
            $validator = Validator::make($request->all(),[
                'question' => 'required|unique:questions,question,',
                'option_one' => 'required',
                'option_two' => 'required',
                'option_three' => 'required',
                'option_four' => 'required',
            ]);
            

           if( $validator->fails() ){
               return response()->json(['errors' => $validator->errors()] ,422);
           }else{
                try{
                    $question = new Question();
                    $question->question = $request->question;
                    $question->option_one = $request->option_one;
                    $question->option_two = $request->option_two;
                    $question->option_three = $request->option_three;
                    $question->option_four = $request->option_four;
                    
                    if( $question->save() ){
                        return redirect()->back()->with('message', 'Data added successfully...!');
                    }

                }catch( Exception $e ){
                    return response()->json(['error' => $e->getMessage()],200);
                }
           }
        
    }

    //edit question function start
    public function edit(){
        return 'ok';
    }
    //edit question function ends
}
