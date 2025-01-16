<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\berita;
use App\Models\carousel;
use App\Models\announcement;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PageUserController 
{
    public function show(Request $request)
    {
        $data = Berita::orderBy('tanggal', 'desc')->get();
    
        $nama_bulan = date('F', strtotime($data[0]->tanggal));
        $tanggal = date('j, Y', strtotime($data[0]->tanggal));
        $tanggal_format = $nama_bulan . ', ' . $tanggal;
    
        // Ambil berita lainnya
        $berita_lainnya = Berita::where('id', '!=', $data[0]->id)->inRandomOrder()->take(9)->get();
        // $berita_lainnya = berita::where('kategori', 'LIKE', '%informatika%')->where('id', '!=', $data[0]->id)->inRandomOrder()->take(5)->get();
    
        // Ambil data untuk carousel
        $carousel = carousel::inRandomOrder()->get();
        
        //ambil data untuk upcoming Event
        $upcomingAnnouncements = announcement::where('tanggal', '>=', Carbon::now())->get();
        // $upcomingAnnouncements = announcement::all();
        
        return view('index', [
            'berita'=>$data, 
            'berita_lainnya'=>$berita_lainnya, 
            'tanggal_format'=>$tanggal_format,
            'carousel'=>$carousel,
            'upcomingAnnouncements'=>$upcomingAnnouncements
        ]);
    }
}

