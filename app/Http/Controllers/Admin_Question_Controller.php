<?php

namespace App\Http\Controllers;

use App\Http\Requests\question_request;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Admin_Question_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $question=Question::all();
        return view('admin.question.question_view',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $quiz=Quiz::get()->pluck('name','id')->toArray();      /* in select for fetch all columns from database */
        return view('admin.question.question_create',compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\never
     */
    public function store(question_request $request)
    {
        Session::flash('create_question','Question has been created');
        $data=new Question();
        $data->title=$request->title;
        $data->point=$request->point;
        $data->quiz_id=$request->quiz_id;
        $data->option_a=$request->option_a;
        $data->option_b=$request->option_b;
        if(empty( $request->option_c)) {
            $data->option_c=0;
        }
        else{
            $data->option_c = $request->option_c;

        }
        if(empty($request->option_d)) {
            $data->option_d=0;
        }
        else{
            $data->option_d = $request->option_d;

        }
        $data->correct_answer=$request->correct_answer;
        $data->save();

        return redirect('/admin/question/create');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz=Quiz::get()->pluck('name','id')->toArray();      /* in select for fetch all columns from database */
        $question=Question::findOrFail($id);
        return view('admin.question.question_edit',compact('question','quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(question_request $request, $id)
    {
        Session::flash('update_question','Question has been updated');
        $data = Question::find($id);
        $data->title=$request->title;
        $data->point=$request->point;
        $data->quiz_id=$request->quiz_id;
        $data->option_a=$request->option_a;
        $data->option_b=$request->option_b;
        $data->option_c=$request->option_c;
        $data->option_d=$request->option_d;
        $data->correct_answer=$request->correct_answer;
        $data->save();
//        $counter = 1;
//        foreach ($request->answer as $answerString) {
//            $aid=new Answer();
//            $answer=$answerString;
//            $is_right=$request->{"is_right" . $counter};
//            $Question_id=$data->id;
//            Answer::where([
//               [ 'Question_id', '=', $data->id],
//                ['is_right','=','true'],
//            ])
//                ->update(['answer' => $answer,'is_right'=>$is_right,'Question_id'=>$Question_id]);
//            $counter++;
//        }



        return redirect('/admin/question');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Session::flash('delete_question','Question has been deleted');
        $question=Question::findOrFail($id);
        $question->delete();
        return redirect('admin/question');
    }
}
