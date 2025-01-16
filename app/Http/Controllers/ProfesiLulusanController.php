<?php

namespace App\Http\Controllers;

use App\Models\plulusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfesiLulusanController extends Controller
{
    public function show()
    {
        $data = plulusan::all();
        return view('profesilulusan', ['plulusans'=>$data]);
    }

    public function showadmin()
    {
        $data = plulusan::all();
        return view('admin.adminpl', ['plulusans'=>$data]);
    }

    public function create()
    {
        return view('admin.adminadd-pl');
    }

    public function store(Request $request)
    {
        $data=plulusan::create($request->all());
        return redirect('/adminpl');
    }

    public function edit(Request $request, $id)
    {
        $data = plulusan::findOrFail($id);
        return view('admin.adminedit-pl',['plulusans'  => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = plulusan::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminpl');
    }

    public function delete($id)
    {
        $data = plulusan::findOrFail($id);
        return view('admin.admindelete-pl',['plulusans'  => $data]);
    }

    public function destroy($id)
    {
        $deleteData =  DB::table('plulusans')->where('id', $id)->delete();
        return redirect('/adminpl');
    }
}
