<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use Datatables;

class AnnouncementController extends Controller
{
    //

	public function create()
    {
                                    //Category ka model name
        return view('announcements.addannouncement');  //compact nt UI htl hlan htae
        //$username=auth()->user()->name;
        //return view('announcements.addannouncement',compact('username'));
    }

    public function index()
    {
        //
        $list =  Announcement::all();
        //return view('eg', compact('list'));
        return view('announcements.announcementlist', compact('list'));
        //return view('eg');
    }

    public function store(Request $request){
    	$announcement = new Announcement;
    	$announcement->title=request()->title;
    	$announcement->content=request()->content;
        //$announcement->user_id=auth()->user()->id;
        $announcement->user_id=1;    //login win lr tet user Id ko hidden field yuu ml
    	$announcement->save();

    	return redirect('index');
    }

    public function edit($id)
    {
        $edit=Announcement::find($id);
        
        return view('announcements.updateannouncement',compact('edit'));
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
        Announcement::findOrFail($id)->update([
            'title'=>request()->title,
            'content'=>request()->content,
            //'user_id'=>auth()->user()->id,
        ]);
        return redirect('/announcement/list')->with('success','Announcement has been updated successfully!!');
    }

     public function show($id)
    {
        $list = Announcement::find($id);

        return view('announcement.list', compact('list'));
    }

}
