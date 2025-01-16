<?php

namespace App\Http\Controllers;

use App\Models\sertifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SertifikasiController extends Controller
{
    public function show()
    {
        $data = sertifikasi::all();
        return view('sertifikasi', ['sertifikasi'=>$data]);
    }

    public function showadmin()
    {
        $data = sertifikasi::all();
        return view('admin.adminsertifikasi', ['sertifikasi'=>$data]);
    }

    public function create()
    {
        return view('admin.adminadd-sertifikasi');
    }

    public function store(Request $request)
    {
        $data=sertifikasi::create($request->all());
        return redirect('/adminsertifikasi');
    }

    public function edit(Request $request, $id)
    {
        $data = sertifikasi::findOrFail($id);
        return view('admin.adminedit-sertifikasi',['sertifikasi'  => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = sertifikasi::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminsertifikasi');
    }

    public function delete($id)
    {
        $data = sertifikasi::findOrFail($id);
        return view('admin.admindelete-sertifikasi',['sertifikasi'  => $data]);
    }

    public function destroy($id)
    {
        $deleteData =  DB::table('sertifikasi')->where('id', $id)->delete();
        return redirect('/adminsertifikasi');
    }
}
