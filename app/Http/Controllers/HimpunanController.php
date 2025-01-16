<?php

namespace App\Http\Controllers;

use View;
use App\Models\himpunan;
use App\Models\himpunan2;
use App\Models\program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class HimpunanController extends Controller
{
    public function show()
    {
    return view::make('himpunan')
    ->with('himpunan' ,  himpunan::all())
    ->with('program' ,  program::all())
    ->with('himpunan2' ,  himpunan2::all());
    }

    public function showadmin()
    {
    return view::make('admin.adminhimpunan')
    ->with('himpunan' ,  himpunan::all())
    ->with('program' ,  program::all())
    ->with('himpunan2' ,  himpunan2::all());
    }

    //PROFILE
    public function createprofile()
    {
        return view('admin.adminadd-profilehimpunan');
    }

    public function storeprofile(Request $request)
    {
        $data=himpunan::create($request->all());
        return redirect('/adminhimpunan');
    }

    public function editprofile(Request $request, $id)
    {
        $data = himpunan::findOrFail($id);
        return view('admin.adminedit-profilehimpunan',['himpunan'  => $data]);
    }

    public function updateprofile(Request $request, $id)
    {
        $data = himpunan::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminhimpunan');
    }

    public function deleteprofile($id)
    {
        $data = himpunan::findOrFail($id);
        return view('admin.admindelete-profilehimpunan',['himpunan'  => $data]);
    }

    public function destroyprofile($id)
    {
        $deleteData =  DB::table('himpunans')->where('id', $id)->delete();
        return redirect('/adminhimpunan');
    }

    //PROGRAM
    public function createprogram()
    {
        return view('admin.adminadd-program');
    }

    public function storeprogram(Request $request)
    {
        $newName1 = '';
        $newName2 = '';
        $newName3 = '';
            
        if ($request->hasFile('gambar1')) {
            $extension1 = $request->file('gambar1')->getClientOriginalExtension();
            $newName1 = $request->input('judul').'- 01.'.$extension1;
            $request->file('gambar1')->storeAs('public/Program', $newName1);
        }
        
        if ($request->hasFile('gambar2')) {
            $extension2 = $request->file('gambar2')->getClientOriginalExtension();
            $newName2 = $request->input('judul').'- 02.'.$extension2;
            $request->file('gambar2')->storeAs('public/Program', $newName2);
        }
        
        if ($request->hasFile('gambar3')) {
            $extension3 = $request->file('gambar3')->getClientOriginalExtension();
            $newName3 = $request->input('judul').'- 03.'.$extension3;
            $request->file('gambar3')->storeAs('public/Program', $newName3);
        }
                
        $program = new Program([
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'gambar1' => $newName1,
            'gambar2' => $newName2,
            'gambar3' => $newName3
        ]);
        
        $program->save();
           
        return redirect('/adminhimpunan');
    }
    

    public function editprogram(Request $request, $id)
    {
        $data = program::findOrFail($id);
        return view('admin.adminedit-program',['program'  => $data]);
    }

    public function updateprogram(Request $request, $id)
    {
        $data = Program::findOrFail($id);
    
        $newName1 = $data->gambar1;
        $newName2 = $data->gambar2;
        $newName3 = $data->gambar3;
    
        if ($request->hasFile('gambar1')) {
            $extension1 = $request->file('gambar1')->getClientOriginalExtension();
            $newName1 = $request->input('judul').'- 01.'.$extension1;
            $request->file('gambar1')->storeAs('public/Program', $newName1);
        }
    
        if ($request->hasFile('gambar2')) {
            $extension2 = $request->file('gambar2')->getClientOriginalExtension();
            $newName2 = $request->input('judul').'- 02.'.$extension2;
            $request->file('gambar2')->storeAs('public/Program', $newName2);
        }
    
        if ($request->hasFile('gambar3')) {
            $extension3 = $request->file('gambar3')->getClientOriginalExtension();
            $newName3 = $request->input('judul').'- 03.'.$extension3;
            $request->file('gambar3')->storeAs('public/Program', $newName3);
        }
    
        $data->update([
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'gambar1' => $newName1,
            'gambar2' => $newName2,
            'gambar3' => $newName3
        ]);
    
        return redirect('/adminhimpunan');
    }
    

    public function deleteprogram($id)
    {
        $data = program::findOrFail($id);
        return view('admin.admindelete-program',['program'  => $data]);
    }

    public function destroyprogram($id)
    {
        $deleteData =  DB::table('programs')->where('id', $id)->delete();
        return redirect('/adminhimpunan');
    }

    // Edit Logo
    public function editlogo(Request $request, $id)
    {
        $data = himpunan2::findOrFail($id);
        return view('admin.adminedit-logohmif',['himpunan2'  => $data]);
    }


public function updatelogo(Request $request, $id)
{

    $data = himpunan2::findOrFail($id);
    $newName = $data->image1; 

    if ($request->hasFile('image1')) {
        $file = $request->file('image1');
        $extension = $file->getClientOriginalExtension();
        $newName = 'Logo HMIF- ' .$request->input('judul1') . now()->timestamp . '.' . $extension;
        $file->storeAs('public/Program', $newName);
    }

    $data->nama = $request->input('nama');
    $data->judul1 = $request->input('judul1');
    $data->image1 = $newName;

    $data->save();

    return redirect('/adminhimpunan');
}



    // Edit Himpunan Baru
    public function edithmif1(Request $request, $id)
    {
        $data = himpunan2::findOrFail($id);
        return view('admin.adminedit-hmif1',['himpunan2'  => $data]);
    }

    public function updatehmif1(Request $request, $id)
    {
        $data = himpunan2::findOrFail($id);
        $newName = $data->image2;
    
        if ($request->hasFile('image2')) {
            $extension = $request->file('image2')->getClientOriginalExtension();
            $newName = $request->input('judul2') . '- current hmif' . now()->timestamp . '.' . $extension;
            $request->file('image2')->storeAs('public/Program', $newName);
        }
    
        $data->judul2 = $request->input('judul2');
        $data->image2 = $newName;
        $data->save();
    
        return redirect('/adminhimpunan');
    }

    // Edit Himpunan Lama
    public function edithmif2(Request $request, $id)
    {
        $data = himpunan2::findOrFail($id);
        return view('admin.adminedit-hmif2',['himpunan2'  => $data]);
    }

    public function updatehmif2(Request $request, $id)
    {
        $data = himpunan2::findOrFail($id);
        $newName = $data->image3;
    
        if ($request->hasFile('image3')) {
            $extension = $request->file('image3')->getClientOriginalExtension();
            $newName = $request->input('judul3') . '- previous hmif' . now()->timestamp . '.' . $extension;
            $request->file('image3')->storeAs('public/Program', $newName);
        }
    
        $data->judul3 = $request->input('judul3');
        $data->image3 = $newName;
        $data->save();
    
        return redirect('/adminhimpunan');
    }

        // Edit Himpunan Lama
        public function editkontak(Request $request, $id)
        {
            $data = himpunan2::findOrFail($id);
            return view('admin.adminedit-kontakhmif',['himpunan2'  => $data]);
        }
    
        public function updatekontak(Request $request, $id)
        {
            $data = himpunan2::findOrFail($id);

            $data->update($request->all());
            return redirect('/adminhimpunan');
        }
}

