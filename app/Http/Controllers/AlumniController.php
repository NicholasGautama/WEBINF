<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\alumni;

class AlumniController extends Controller
{
    public function show()
    {
        $data = alumni::all();
        return view('alumni', ['alumni'=>$data]);
    }

    public function showadmin()
    {
        $data = alumni::all();
        return view('admin.adminalumni', ['alumni'=>$data]);
    }

    public function create()
    {
        return view('admin.adminadd-alumni');
    }

    public function store(Request $request)
    {
        $data = new alumni();

        $data->judul = $request->input('judul');
        
        if ($request->hasFile('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->input('judul') . '-LogoUpdate-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('public/Sarana', $newName);
            $data->gambar = $newName;
        }
        
        $data->isi = $request->input('isi');
        $data->save();

        return redirect('/adminalumni');
    }

    public function edit($id)
    {
        $data = alumni::findOrFail($id);
        return view('admin.adminedit-alumni', ['alumni' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = alumni::findOrFail($id);
        
        $data->judul = $request->input('judul');
        
        if ($request->hasFile('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->input('judul') . '-LogoUpdate-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('public/Sarana', $newName);
            $data->gambar = $newName;
        }
        
        $data->isi = $request->input('isi');
        $data->save();

        return redirect('/adminalumni');
    }
}
