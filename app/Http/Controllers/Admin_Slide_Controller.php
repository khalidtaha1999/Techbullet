<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Admin_Slide_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $slide=Slide::all();
        return view('admin.slide.slide_index',compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $Courses=Course::get()->pluck('name','id')->toArray();      /* in select for fetch all columns from database */

        return view('admin.slide.create_slide',compact('Courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        if($request->file('file'))
        {
            $file = $request->file('file');
            $filename = time() . $file->getClientOriginalName();
            $filePath = public_path() . '/files/uploads/';
            $file->move($filePath, $filename);
        }
        $name=$request->name;
        $course_id=$request->Course_id;
        Slide::create(['name'=>$name,'Course_id'=>$course_id,'file'=>$filename]);
        return redirect('/admin/slide');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function show($id)
    {
        $dl=Slide::FindOrFail($id);
        $myFile = public_path('files\uploads\\'.$dl->file);
        return response()->download($myFile);

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
}
