<?php

namespace App\Http\Controllers;

use App\Http\Requests\course_create_request;
use App\Http\Requests\course_update_request;
use App\Models\Course;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Admin_Course_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $course=Course::all();
        return view('admin.course.course_index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create_course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(course_create_request $request)
    {
        Session::flash('create_course','Course has been created');

        if($file=$request->file('image')){
            $name= time() . $file->getClientOriginalName();
            $file->move('images',$name);
        }
        $course_name=$request->name;
        Course::create(['name'=>$course_name,'image'=>$name]);

        return redirect('/admin/course');
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
        $course=Course::FindOrFail($id);
        return view('admin.course.edit_course',compact('course'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(course_update_request $request, $id)
    {
        Session::flash('update_course','Course has been updated');
        $input=$request->all();
        $course=Course::FindOrFail($id);
        $course->update($input);
        return redirect('/admin/course');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Session::flash('delete_course','Course has been deleted');
        $course=Course::FindOrFail($id);
        $course->delete();
        $slide=Slide::where('Course_id',$course->id)->first();
        $slide->delete();
        $quiz=Quiz::where('Course-id',$course->id)->first();
        $question=Question::where('quiz_id',$quiz->id);
        $question->delete();
        $quiz->delete();
        $filename=public_path('files\uploads\\'.$course->image);
        if((file_exists($filename))) {
            unlink('files\uploads\\'.$course->image);
        }
        
        return redirect('/admin/course');
    }
}
