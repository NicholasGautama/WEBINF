<?php

namespace App\Http\Controllers;

use View;
use App\Models\award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AwardController extends Controller
{
    public function show()
    {
        return view::make('award')->with('award', award::all());
    }
    public function showadmin()
    {
    return view::make('admin.adminaward')
    ->with('award' ,  award::all());
    }

    public function createaward()
    {
        return view('admin.adminadd-award');
    }
    public function storeaward(Request $request)
    {
        $data=award::create($request->all());
        return redirect('/adminaward');
    }
    public function editaward(Request $request, $id)
    {
        $data = award::findOrFail($id);
        return view('admin.adminedit-award',['award'  => $data]);
    }
    public function updateaward(Request $request, $id)
    {
        $data = award::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminaward');
    }

    public function deleteaward($id)
    {
        $data = award::findOrFail($id);
        return view('admin.admindelete-award',['award'  => $data]);
    }
    
    public function destroyaward($id)
    {
        $deleteData =  DB::table('awards')->where('id', $id)->delete();
        return redirect('/adminaward');
    }
}
