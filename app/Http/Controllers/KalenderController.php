<?php

namespace App\Http\Controllers;

use View;
use App\Models\kalender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class KalenderController extends Controller
{
    public function show()
    {
        $image = kalender::all();
        return view('kalenderakademik', ['kalender'=>$image]);
    
    }
    public function showadmin()
    {
        // return view('admin.adminkalender');
        $image = kalender::all();
        return view('admin.adminkalender', ['kalender'=>$image]);
        // $image = kalender::all();
        // return view('admin.adminkalender', ['kalender'=>$image]);
    }

    public function create()
    {
        return view('admin.adminadd-kalender');
    }

    public function store(Request $request)
    {
    
        $newName = '';
            
        $extension = $request->file('image')->getClientOriginalExtension();
        $newName = $request->input('judul').'-'.now()->timestamp.'.'.$extension;
        $request->file('image')->storeAs('public/Kalender', $newName);
                
        $request->merge(['image' => $newName]);
        $image = kalender::create([
            'judul' => $request->input('judul'),
            'image' => $newName
        ]);
            
        return redirect('/adminkalender');
    }
    
    

    public function edit(Request $request, $id)
    {
        $image = kalender::findOrFail($id);
        return view('admin.adminedit-kalenderakademik',['kalender'=>$image]);
    }

    public function update(Request $request, $id)
    {
        $image = kalender::findOrFail($id);

        $image->update($request->all());
        return redirect('/adminkalender');
    }

    public function deleteImage($id)
    {
      $kalender = Kalender::findOrFail($id);
      Storage::delete('public/image/'.$kalender->image);
      $kalender->delete();
      return redirect()->back();
    }

}
