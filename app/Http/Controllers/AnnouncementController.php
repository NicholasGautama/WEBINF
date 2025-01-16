<?php

namespace App\Http\Controllers;

use View;
use App\Models\announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AnnouncementController extends Controller
{
    public function show()
    {
        $data = announcement::all();
        return view('announcement', ['announcement'=>$data]);
    }

    public function tampil($id)
    {
        $data = announcement::findOrFail($id);
        return view('read-announcement', ['announcement'=>$data]);
    }

    public function showadmin()
    {
        $data = announcement::all();
        return view('admin.adminannouncement', ['announcement'=>$data]);
    }

    public function create()
    {
        return view('admin.adminadd-announcement');
    }

    public function store(Request $request)
    {
        $data=announcement::create($request->all());
        return redirect('/adminannouncement');
    }

    public function edit(Request $request, $id)
    {
        $data = announcement::findOrFail($id);
        return view('admin.adminedit-announcement',['announcement'  => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = announcement::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminannouncement');
    }

    public function delete($id)
    {
        $data = announcement::findOrFail($id);
        return view('admin.admindelete-announcement',['announcement'  => $data]);
    }
    
    public function destroy($id)
    {
        $deleteData =  announcement::findOrFail($id)->delete();
        return redirect('/adminannouncement');
    }
    
}
