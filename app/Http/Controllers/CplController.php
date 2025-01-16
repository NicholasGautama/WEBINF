<?php

namespace App\Http\Controllers;

use View;
use App\Models\cpl;
use App\Models\cpltable2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CplController extends Controller
{
    public function show()
    {
    return view::make('capaianpembelajaran')
    ->with('datacpl1' ,  cpl::all())
    ->with('datacpl2' ,  cpltable2::all());
    
    }

    public function showadmin()
    {
    return view::make('admin.admincpl')
    ->with('datacpl1' ,  cpl::all())
    ->with('datacpl2' ,  cpltable2::all());
    }

    public function create()
    {
        return view('admin.adminadd-cpl');
    }

    public function store(Request $request)
    {
        $data=cpl::create($request->all());
        return redirect('/admincpl');
    }

    public function edit(Request $request, $id)
    {
        $data = cpl::findOrFail($id);
        return view('admin.adminedit-cpl',['datacpl1'  => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = cpl::findOrFail($id);

        $data->update($request->all());
        return redirect('/admincpl');
    }

    public function delete($id)
    {
        $data = cpl::findOrFail($id);
        return view('admin.admindelete-cpl',['datacpl1'  => $data]);
    }

    public function destroy($id)
    {
        $deleteData =  DB::table('cpls')->where('id', $id)->delete();
        return redirect('/admincpl');
    }

    public function create2()
    {
        return view('admin.adminadd-cpl2');
    }

    public function store2(Request $request)
    {
        $data=cpltable2::create($request->all());
        return redirect('/admincpl');
    }

    public function edit2(Request $request, $id)
    {
        $data=cpltable2::findOrFail($id);
        return view('admin.adminedit-cpl2',['datacpl2'  => $data]);
    }

    public function update2(Request $request, $id)
    {
        $data = cpltable2::findOrFail($id);

        $data->update($request->all());
        return redirect('/admincpl');
    }

    public function delete2($id)
    {
        $data = cpltable2::findOrFail($id);
        return view('admin.admindelete-cpl2',['datacpl2'  => $data]);
    }

    public function destroy2($id)
    {
        $deleteData =  DB::table('cpltable2s')->where('id', $id)->delete();
        return redirect('/admincpl');
    }
}
