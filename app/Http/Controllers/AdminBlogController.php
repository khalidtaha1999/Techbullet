<?php

namespace App\Http\Controllers;

use App\Http\Requests\blog_create_request;
use App\Http\Requests\blog_update_request;
use App\Http\Requests\BlogEditRequest;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
       $blog=Blog::all();
        return view('admin.Blog.blog_view',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Blog.create_blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(blog_create_request $request)
    {
        Session::flash('create_blog','Blog Has Been Created');
        if($file=$request->file('image')){
            $name= time() . $file->getClientOriginalName();
            $file->move('images',$name);
        }
        $title=$request->title;
        $body=$request->body;
        $id=Auth::id();
      $blog=  Blog::create(['title'=>$title,'body'=>$body,'image'=>$name,'user_id'=>$id]);
        DB::table('blogs')
            ->where('id', $blog->id)
            ->update(['pending' => "1"]);

        return redirect('/admin/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        $blog=Blog::findOrFail($id);
        DB::table('blogs')
            ->where('id', $blog->id)
            ->update(['pending' => "1"]);
           return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::findOrFail($id);
        return view('admin.Blog.edit_blog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(blog_update_request $request, $id)
    {
        Session::flash('update_blog','Blog Has Been Updated');
        $blog=Blog::findOrFail($id);
        if($file=$request->file('image')){
            unlink('images/'.$blog->image);
            $name= time() . $file->getClientOriginalName();
            $file->move('images',$name);
            $blog->update(['image'=>$name]);
        }
        $title=$request->title;
        $body=$request->body;
       $blog->update(['title'=>$title,'body'=>$body]);
        return redirect('/admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Session::flash('delete_blog','Blog Has Been Deleted');
        $blog=Blog::findOrFail($id);
        if(!empty($blog->image)) {
            unlink('images/'.$blog->image);
        }
        $blog->delete();
        return redirect('/admin/blog');

    }
}
