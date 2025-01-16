<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\about;


class AboutController extends Controller
{
    public function show()
    {
        $data = about::all();
        return view('sekilas', ['about'=>$data]);
    }
    
    public function showadmin()
    {
        $data = about::all();
        return view('admin.adminsekilas', ['about'=>$data]);
    }

    public function edit(Request $request, $id)
    {
        $data = about::findOrFail($id);
        return view('admin.adminedit-sekilas',['about'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $data = about::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminsekilas');
    }
}
