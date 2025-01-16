<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\berita;

class BeritaController extends Controller
{
    public function show()
    {
        $data = berita::where('kategori', 'LIKE', '%informatika%')->get();
        return view('berita', ['berita' => $data]);
    }

    public function read(Request $request, $id)
    {
        $data = berita::findOrFail($id);
        $nama_bulan = date('F', strtotime($data->tanggal));
        $tanggal = date('j, Y', strtotime($data->tanggal));
        $tanggal_format = $nama_bulan . ', ' . $tanggal;
    
        // Ambil berita lainnya
        $berita_lainnya = berita::where('kategori', 'LIKE', '%informatika%')->where('id', '!=', $id)->inRandomOrder()->take(5)->get();

        return view('read-berita', ['berita' => $data, 'berita_lainnya' => $berita_lainnya]);
    }

    public function showadmin()
    {
        $data = berita::all();
        // $data = berita::where('kategori', 'LIKE', '%informatika%')->get();
        return view('admin.adminberita', ['berita' => $data]);
    }

    public function create()
    {
        return view('admin.adminadd-berita');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'kota' => 'required',
            'narasi' => 'required',
            'konten' => 'required',
        ]);

        if ($request->hasFile('image') && $validatedData) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = 'Berita -' . $request->input('tanggal') . '.' . $request->input('kota'). '.' . $extension;
            $file->storeAs('public/Berita', $newName);

            $image = Berita::create([
                'judul' => $request->input('judul'),
                'penulis' => $request->input('penulis'),
                'tanggal' => $request->input('tanggal'),
                'kategori' => $request->input('kategori'),
                'image' => $newName,
                'kota' => $request->input('kota'),
                'narasi' => $request->input('narasi'),
                'konten' => $request->input('konten'),
            ]);

            
            return redirect('/adminberita')->with('status', 'Berita baru berhasil ditambahkan!');
        }
    }

    public function edit(Request $request, $id)
    {
        $data = berita::findOrFail($id);
        return view('admin.adminedit-berita', ['berita' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg',
            'kota' => 'required',
            'narasi' => 'required',
            'konten' => 'required',
        ]);
    
        $data = Berita::findOrFail($id);
        $newName = $data->image; 
    
        if ($request->hasFile('image') && $validatedData) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = 'Berita - ' . $request->input('tanggal') . '-' . $request->input('kota') . '.' . $extension;
            $file->storeAs('public/Berita', $newName);
        }
    
        $data->judul = $request->input('judul');
        $data->penulis = $request->input('penulis');
        $data->tanggal = $request->input('tanggal');
        $data->kategori = $request->input('kategori');
        $data->image = $newName;
        $data->kota = $request->input('kota');
        $data->narasi = $request->input('narasi');
        $data->konten = $request->input('konten');
        $data->save();
    
        return redirect('/adminberita');
    }

    public function delete($id)
    {
        $data = Berita::findOrFail($id);
        return view('admin.admindelete-berita', ['berita' => $data]);
    }

    public function destroy($id)
    {
        $deleteData = DB::table('beritas')->where('id', $id)->delete();
        return redirect('/adminberita');
    }
}