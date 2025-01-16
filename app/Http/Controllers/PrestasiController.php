<?php

namespace App\Http\Controllers;

use View;
use App\Models\prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestasiController extends Controller
{
    public function show()
    {
        $data = prestasi::all();
        return view('prestasi', ['prestasi'=>$data]);
    }

    public function showadmin()
    {
        $data = prestasi::all();
        return view('admin.adminprestasi', ['prestasi'=>$data]);
    }

    public function create()
    {
        return view('admin.adminadd-prestasi');
    }

    public function store(Request $request)
    {
        $data=prestasi::create($request->all());
        return redirect('/adminprestasi');
    }

    public function edit(Request $request, $id)
    {
        $data = prestasi::findOrFail($id);
        return view('admin.adminedit-prestasi',['prestasi'  => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = prestasi::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminprestasi');
    }

    public function delete($id)
    {
        $data = prestasi::findOrFail($id);
        return view('admin.admindelete-prestasi',['prestasi'  => $data]);
    }

    public function destroy($id)
    {
        $deleteData =  DB::table('prestasis')->where('id', $id)->delete();
        return redirect('/adminprestasi');
    }
}
