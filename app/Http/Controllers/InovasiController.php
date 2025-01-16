<?php

namespace App\Http\Controllers;

use View;
use App\Models\inovasi;
use App\Models\inovasi2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InovasiController extends Controller
{
    public function show()
    {
    $data1 = inovasi::orderBy('tahun', 'desc')->get();
    $data2 = inovasi2::orderBy('tahun', 'desc')->get();
    return view('inovasi')
        ->with('data1', $data1)
        ->with('data2', $data2);
    }

    public function showadmin()
    {
        $data1 = inovasi::orderBy('tahun', 'desc')->get();
        $data2 = inovasi2::orderBy('tahun', 'desc')->get();
        return view('admin.admininovasi')
            ->with('data1', $data1)
            ->with('data2', $data2);
    }

    public function create()
    {
        return view('admin.adminadd-inovasi');
    }

    public function store(Request $request)
    {
        $data=inovasi::create($request->all());
        return redirect('/admininovasi');
        // dd($request);
    }

    public function edit(Request $request, $id)
    {
        $data = inovasi::findOrFail($id);
        return view('admin.adminedit-inovasi',['inovasi'  => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = inovasi::findOrFail($id);

        $data->update($request->all());
        return redirect('/admininovasi');
    }

    public function delete($id)
    {
        $data = inovasi::findOrFail($id);
        return view('admin.admindelete-inovasi',['inovasi'  => $data]);
    }

    public function destroy($id)
    {
        $deleteData =  DB::table('inovasis')->where('id', $id)->delete();
        return redirect('/admininovasi');
    }

    public function create2()
    {
        return view('admin.adminadd-inovasi2');
    }

    public function store2(Request $request)
    {
        $data=inovasi2::create($request->all());
        return redirect('/admininovasi');
        // dd($request);
    }

    public function edit2(Request $request, $id)
    {
        $data = inovasi2::findOrFail($id);
        return view('admin.adminedit-inovasi2',['inovasi'  => $data]);
    }

    public function update2(Request $request, $id)
    {
        $data = inovasi2::findOrFail($id);

        $data->update($request->all());
        return redirect('/admininovasi');
    }

    public function delete2($id)
    {
        $data = inovasi2::findOrFail($id);
        return view('admin.admindelete-inovasi2',['inovasi'  => $data]);
    }

    public function destroy2($id)
    {
        $deleteData =  DB::table('inovasi2s')->where('id', $id)->delete();
        return redirect('/admininovasi');
    }
}

