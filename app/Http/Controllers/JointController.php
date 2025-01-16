<?php

namespace App\Http\Controllers;

use View;
use App\Models\joint;
use App\Models\joint2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JointController extends Controller
{
    public function showadmin()
    {
    return view::make('admin.adminjoint')
    ->with('joint' ,  joint::all())
    ->with('joint2', joint2::all());
    }

    public function createjoint()
    {
        return view('admin.adminadd-joint');
    }
    public function storejoint(Request $request)
    {
        $data=joint::create($request->all());
        return redirect('/adminjoint');
    }
    public function editjoint(Request $request, $id)
    {
        $data = joint::findOrFail($id);
        return view('admin.adminedit-joint',['joint'  => $data]);
    }
    public function updatejoint(Request $request, $id)
    {
        $data = joint::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminjoint');
    }

    public function deletejoint($id)
    {
        $data = joint::findOrFail($id);
        return view('admin.admindelete-joint',['joint'  => $data]);
    }
    
    public function destroyjoint($id)
    {
        $deleteData =  DB::table('joints')->where('id', $id)->delete();
        return redirect('/adminjoint');
    }
    /////TAB BAWAH
    public function createjoint2()
    {
        return view('admin.adminadd-joint2');
    }
    public function storejoint2(Request $request)
    {
        $data=joint2::create($request->all());
        return redirect('/adminjoint');
    }
    public function editjoint2(Request $request, $id)
    {
        $data = joint2::findOrFail($id);
        return view('admin.adminedit-joint2',['joint2'  => $data]);
    }
    public function updatejoint2(Request $request, $id)
    {
        $data = joint2::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminjoint');
    }

    public function deletejoint2($id)
    {
        $data = joint2::findOrFail($id);
        return view('admin.admindelete-joint2',['joint2'  => $data]);
    }
    
    public function destroyjoint2($id)
    {
        $deleteData =  DB::table('joint2s')->where('id', $id)->delete();
        return redirect('/adminjoint');
    }
}
