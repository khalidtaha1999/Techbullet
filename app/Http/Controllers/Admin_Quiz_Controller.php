<?php

namespace App\Http\Controllers;

use App\Http\Requests\quiz_create_request;
use App\Http\Requests\quiz_request;
use App\Models\Course;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Admin_Quiz_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $quiz=Quiz::all();
        return view('admin.quiz.quiz_view',compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $Courses=Course::get()->pluck('name','id')->toArray();      /* in select for fetch all columns from database */
        return view('admin.quiz.quiz_create',compact('Courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(quiz_request $request)
    {
        Session::flash('create_quiz','Quiz has been created');
        $input=$request->all();
        Quiz::create($input);
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
        $Courses=Course::get()->pluck('name','id')->toArray();      /* in select for fetch all columns from database */
        $quiz=Quiz::findOrFail($id);
        return view('admin.quiz.quiz_edit',compact('quiz','Courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(quiz_request $request, $id)
    {
        Session::flash('update_quiz','Quiz has been updated');
        $input=$request->all();
        $quiz=Quiz::findOrFail($id);
        $quiz->update($input);
        return redirect('/admin/quiz');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Session::flash('delete_quiz','Quiz has been deleted');
        $quiz=Quiz::findOrFail($id);
        $quiz->delete();
        $question=Question::where('quiz_id',$quiz->id);
        $question->delete();
        return redirect('/admin/quiz');
    }
}
