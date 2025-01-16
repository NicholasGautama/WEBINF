<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\berita;
use App\Models\carousel;
use Illuminate\Support\Facades\DB;

class PageAdminController 
{

    public function showlogin(Request $request)
    {
        $carousel = carousel::inRandomOrder()->get();
        return view('admin', [
            'carousel'=>$carousel
        ]);
    }

    public function show(Request $request)
    {
        $data = Berita::orderBy('tanggal', 'desc')->get();
    
        $nama_bulan = date('F', strtotime($data[0]->tanggal));
        $tanggal = date('j, Y', strtotime($data[0]->tanggal));
        $tanggal_format = $nama_bulan . ', ' . $tanggal;
    
        // Ambil berita lainnya
        $berita_lainnya = Berita::where('id', '!=', $data[0]->id)->inRandomOrder()->take(5)->get();
    
        // Ambil data untuk carousel
        $carousel = carousel::inRandomOrder()->get();
    
        return view('adminpage', [
            'berita'=>$data, 
            'berita_lainnya'=>$berita_lainnya, 
            'tanggal_format'=>$tanggal_format,
            'carousel'=>$carousel
        ]);
    }

    public function editcarousel()
    {
        return View::make('admin.adminedit-carousel')
        ->with('carousel' ,  carousel::all());
    }
    
    public function create()
    {
        return view('admin.adminadd-carousel');
    }

    public function store(Request $request)
    {
    
        $newName = '';
            
        $extension = $request->file('image')->getClientOriginalExtension();
        $newName = $request->input('judul').'-'.now()->timestamp.'.'.$extension;
        $request->file('image')->storeAs('public/Carousel', $newName);
                
        $request->merge(['image' => $newName]);
        $image = carousel::create([
            'judul' => $request->input('judul'),
            'image' => $newName
        ]);
        
            
        return redirect('/adminedit-carousel');
    }
    
    public function delete($id)
    {
        $data = carousel::findOrFail($id);
        return view('admin.admindelete-carousel',['carousel'  => $data]);
    }

    public function destroy($id)
    {
        $deleteData =  DB::table('carousels')->where('id', $id)->delete();
        return redirect('/adminedit-carousel');
    }

    public function kontak()
    {
        return view('admin.adminkontak');
    }
}
