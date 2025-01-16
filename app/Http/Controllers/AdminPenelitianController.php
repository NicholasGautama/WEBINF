<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use App\Models\research;
use App\Models\research2;
use App\Models\research3;
use Illuminate\Support\Facades\DB;

class adminpenelitiancontroller extends Controller
{
    public function show()
    {
        $penelitian1 = research::orderBy('tahun', 'desc')->get();
        $penelitian2 = research2::orderBy('tahun', 'desc')->get();
        $penelitian3 = research3::orderBy('tahun', 'desc')->get();
        return view('penelitian')
            ->with('penelitian1', $penelitian1)
            ->with('penelitian2', $penelitian2)
            ->with('penelitian3', $penelitian3);
    }
    
    public function index()
    {
        $penelitian1 = research::orderBy('tahun', 'desc')->get();
        $penelitian2 = research2::orderBy('tahun', 'desc')->get();
        $penelitian3 = research3::orderBy('tahun', 'desc')->get();
        return view('admin.adminresearch')
            ->with('penelitian1', $penelitian1)
            ->with('penelitian2', $penelitian2)
            ->with('penelitian3', $penelitian3);
    }

    public function create()
    {
        return view('admin.adminadd-penelitian');
    }

    public function store(Request $request)
    {
        // Cara 1
        // $research = new Research;
        // $research->no = $request->no;
        // $research->tahun = $request->tahun;
        // $research->judul_penelitian = $request->judul_penelitian;
        // $research->peneliti = $request->peneliti;
        // $research->save();

        // Cara 2
        $research=Research::create($request->all());
        return redirect('adminresearch');

    }

    public function edit(Request $request, $id)
    {
        $research = Research::findOrFail($id);
        return view('admin.adminedit-penelitian',['research'  => $research]);
        // dd('test');
    }

    public function update(Request $request, $id)
    {
        $research = Research::findOrFail($id);

        $research->update($request->all());
        return redirect('/adminresearch');
    }
    
    public function delete($id)
    {
        $research = Research::findOrFail($id);
        return view('admin.admindelete-penelitian',['research'  => $research]);
    }

    public function destroy($id)
    {
        $deleteResearch =  DB::table('research')->where('id', $id)->delete();
        return redirect('/adminresearch');
    }
    

    public function create2()
    {
        return view('admin.adminadd-penelitian2');
    }

    public function store2(Request $request)
    {
        $penelitian=Research2::create($request->all());
        return redirect('/adminresearch');
    }

    public function edit2(Request $request, $id)
    {
        $penelitian = Research2::findOrFail($id);
        return view('admin.adminedit-penelitian2',['penelitian'  => $penelitian]);
    }

    public function update2(Request $request, $id)
    {
        $penelitian= Research2::findOrFail($id);

        $penelitian->update($request->all());
        return redirect('/adminresearch');
    }
    
    public function delete2($id)
    {
        $penelitian = Research2::findOrFail($id);
        return view('admin.admindelete-penelitian2',['penelitian'  => $penelitian]);
    }

    public function destroy2($id)
    {
        $deleteResearch =  DB::table('research2s')->where('id', $id)->delete();
        return redirect('/adminresearch');
    }

    public function create3()
    {
        return view('admin.adminadd-penelitian3');
    }

    public function store3(Request $request)
    {
        $penelitian=Research3::create($request->all());
        return redirect('/adminresearch');
    }

    public function edit3(Request $request, $id)
    {
        $penelitian = Research3::findOrFail($id);
        return view('admin.adminedit-penelitian3',['penelitian'  => $penelitian]);
    }

    public function update3(Request $request, $id)
    {
        $penelitian= Research3::findOrFail($id);

        $penelitian->update($request->all());
        return redirect('/adminresearch');
    }
    
    public function delete3($id)
    {
        $penelitian = Research3::findOrFail($id);
        return view('admin.admindelete-penelitian3',['penelitian'  => $penelitian]);
    }

    public function destroy3($id)
    {
        $deleteResearch =  DB::table('research3s')->where('id', $id)->delete();
        return redirect('/adminresearch');
    }
}
