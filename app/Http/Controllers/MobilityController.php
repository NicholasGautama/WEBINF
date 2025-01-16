<?php

namespace App\Http\Controllers;

use View;
use App\Models\mobility;
use App\Models\mobility2;
use App\Models\mobility3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class MobilityController extends Controller
{
    public function show()
    {
        return view::make('mobility')    
        ->with('mobility' ,  mobility::all())
        ->with('mobility2', mobility2::all())
        ->with('mobility3', mobility3::all());
    }
    public function showadmin()
    {
    return view::make('admin.adminmobility')
    ->with('mobility' ,  mobility::all())
    ->with('mobility2', mobility2::all())
    ->with('mobility3', mobility3::all());

    }  
    public function editmobility(Request $request, $id)
    {
        $data = mobility::findOrFail($id);
        return view('admin.adminedit-mobility',['mobility'  => $data]);
    }


    public function updatemobility(Request $request, $id)
    {

        $data = mobility::findOrFail($id);
        $newName = $data->image; 

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = 'Mobility' . '.' . $extension;
            $file->storeAs('public/Mobility', $newName);
        }

        $data->judul = $request->input('judul');
        $data->image = $newName;

        $data->save();

        return redirect('/adminmobility');
    }

    public function editmobility2(Request $request, $id)
    {
        $data = mobility2::findOrFail($id);
        return view('admin.adminedit-mobility2',['mobility2'  => $data]);
    }
    public function updatemobility2(Request $request, $id)
    {
        $data = mobility2::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminmobility');
    }

    public function editmobility3(Request $request, $id)
    {
        $data = mobility3::findOrFail($id);
        return view('admin.adminedit-mobility3',['mobility3'  => $data]);
    }


    public function updatemobility3(Request $request, $id)
    {

        $data = mobility3::findOrFail($id);
        $newName = $data->image; 

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = $request->input('judul') . '.' . $extension;
            $file->storeAs('public/Mobility', $newName);
        }

        $data->judul = $request->input('judul');
        $data->isi = $request->input('isi');
        $data->image = $newName;

        $data->save();

        return redirect('/adminmobility');
    }
////////////////////////////////////////////////////
    public function createmobility3()
    {
        return view('admin.adminadd-mobility3');
    }

    public function storemobility3(Request $request)
    {
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = $request->input('judul') . '.' . $extension;
            $file->storeAs('public/Mobility', $newName);
        }
        
                
        $mobility3 = mobility3::create([
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'image' => $newName
        ]);
        
        $mobility3->save();
           
        return redirect('/adminmobility');
    }
    /////////////////////
        public function deletemobility3($id)
    {
        $data = mobility3::findOrFail($id);
        return view('admin.admindelete-mobility3',['mobility3'  => $data]);
    }

    public function destroymobility3($id)
    {
        $deleteData =  DB::table('mobility3s')->where('id', $id)->delete();
        return redirect('/adminmobility');
    }

}
