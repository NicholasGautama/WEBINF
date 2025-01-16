<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Pengabdian;
use Illuminate\Support\Facades\DB;

class PengabdianController extends Controller
{

    public function show()
    {
        $data = Pengabdian::all();
        return view('pengabdian', ['pengabdian' => $data]);
    }

    public function showadmin()
    {
        $data = Pengabdian::all();
        return view('admin.adminpengabdian', ['pengabdian' => $data]);
    }

    public function create()
    {
        return view('admin.adminadd-pengabdian');
    }

    public function store(Request $request)
    {
        $data = Pengabdian::create($request->all());
        return redirect('/adminpengabdian');
    }

    public function edit(Request $request, $id)
    {
        $data = Pengabdian::findOrFail($id);
        return view('admin.adminedit-pengabdian', ['pengabdian' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = Pengabdian::findOrFail($id);
        $data->update($request->all());
        return redirect('/adminpengabdian');
    }

    public function delete($id)
    {
        $data = Pengabdian::findOrFail($id);
        return view('admin.admindelete-pengabdian', ['pengabdian' => $data]);
    }

    public function destroy($id)
    {
        $deleteData = DB::table('pengabdians')->where('id', $id)->delete();
        return redirect('/adminpengabdian');
    }
}
