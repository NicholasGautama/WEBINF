<?php

namespace App\Http\Controllers;
use View;
use App\Models\prospect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProspectController extends Controller
{
    public function show()
    {
        return view::make('prospect')->with('prospect', prospect::all());
    }
    public function showadmin()
    {
    return view::make('admin.adminprospect')
    ->with('prospect' ,  prospect::all());
    }

    public function createprospect()
    {
        return view('admin.adminadd-prospect');
    }
    public function storeprospect(Request $request)
    {
        $data=prospect::create($request->all());
        return redirect('/adminprospect');
    }
    public function editprospect(Request $request, $id)
    {
        $data = prospect::findOrFail($id);
        return view('admin.adminedit-prospect',['prospect'  => $data]);
    }
    public function updateprospect(Request $request, $id)
    {
        $data = prospect::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminprospect');
    }

    public function deleteprospect($id)
    {
        $data = prospect::findOrFail($id);
        return view('admin.admindelete-prospect',['prospect'  => $data]);
    }
    
    public function destroyprospect($id)
    {
        $deleteData =  DB::table('prospects')->where('id', $id)->delete();
        return redirect('/adminprospect');
    }
}
