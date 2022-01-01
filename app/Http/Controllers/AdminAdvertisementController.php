<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdvertisementEditRequest;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $ad=Advertisement::all();
        return view('admin.advertisement.advertisement_view',compact('ad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.advertisement.create_advertisement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(AdvertisementRequest $request)
    {
        Session::flash('create_ad','Advertisement Has Been Created');
        if ($file=$request->file('image')){
            $name=time().$file->getClientOriginalName();
            $file->move('images',$name);
        }
        $title= $request->title;
        $body=$request->body;
        Advertisement::create(['title'=>$title,'image'=>$name,'body'=>$body]);
        return redirect('/admin/advertisement');
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
        $ad=Advertisement::findOrFail($id);
        return view('admin.advertisement.edit_advertisement',compact('ad'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(AdvertisementEditRequest $request, $id)
    {
        Session::flash('update_ad','Advertisement Has been Updated');
        $ad=Advertisement::findOrFail($id);
        if($file=$request->file('image')){
            unlink('images/'.$ad->image);
            $name=time().$file->getClientOriginalName();
            $file->move('images',$name);
            $ad->update(['image'=>$name]);
        }
            $title = $request->title;
            $body = $request->body;
            $ad->update(['title' => $title, 'body' => $body]);
            return redirect('/admin/advertisement');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Session::flash('delete_ad','Advertisement Has Been Deleted');
        $ad=Advertisement::findOrFail($id);
        if(!empty($ad->image)){
            unlink('images/'.$ad->image);
        }
        $ad->delete();
        return redirect('/admin/advertisement');
    }
}
