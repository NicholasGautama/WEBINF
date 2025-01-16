<?php

namespace App\Http\Controllers;

use View;
use App\Models\sarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaranaController extends Controller
{
    public function show()
    {
        return view::make('sarana')
        ->with('sarana' ,  sarana::all());
    }

    public function read(Request $request, $id)
    {
        $data = sarana::findOrFail($id);
        return view('read-sarana', ['sarana'=>$data]);
    }

    public function showadmin()
    {
        return view::make('admin.adminsarana')
        ->with('sarana' ,  sarana::all());
    }

    public function create()
    {
        return view('admin.adminadd-sarana');
    }

    public function store(Request $request)
    {      
        $newName = '';
            
        $extension = $request->file('image')->getClientOriginalExtension();
        $newName = $request->input('fasilitas').'- Fasilitas UMN -'.now()->timestamp.'.'.$extension;
        $request->file('image')->storeAs('public/Sarana', $newName);
                
        $request->merge(['image' => $newName]);
        $image = sarana::create([
            'fasilitas' => $request->input('fasilitas'),
            'image' => $newName,
            'penjelasan' => $request->input('penjelasan'),
        ]);
        return redirect('/adminsarana');
    }

    public function edit(Request $request, $id)
    {
        $data = sarana::findOrFail($id);
        return view('admin.adminedit-sarana',['sarana'  => $data]);
    }

    public function update(Request $request, $id)
    {
        $sarana = sarana::findOrFail($id);
        $newName = $sarana->image;
    
        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->input('fasilitas').' - Fasilitas UMN -'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('public/Sarana', $newName);
        }
    
        $sarana->fasilitas = $request->input('fasilitas');
        $sarana->penjelasan = $request->input('penjelasan');
        $sarana->image = $newName;
        $sarana->save();
    
        return redirect('/adminsarana');
    }
    

    public function delete($id)
    {
        $data = sarana::findOrFail($id);
        return view('admin.admindelete-sarana',['sarana'  => $data]);
    }

    public function destroy($id)
    {
        $deleteData =  DB::table('saranas')->where('id', $id)->delete();
        return redirect('/adminsarana');
    }

}