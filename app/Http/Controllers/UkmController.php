<?php

namespace App\Http\Controllers;

use View;
use App\Models\ukm;
use App\Models\ukm2;
use App\Models\programsukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UkmController extends Controller
{
    public function showUKM()
    {
        $images = [
            'softballUMN.jpg',
            'volleyballUMN.jpg',
            'basketballUMN.jpg',
            'futsalUMN.jpg',
            'badmintonUMN.jpg',
            'capoeiraUMN.jpg',
            'tennis-mejaUMN.jpg',
            'taekwondoUMN.jpg',
            'spectreUMN.jpg',
            'tracceUMN.jpg',
            'street-danceUMN.jpg',
            'umn-symphony-orchestraUMN.jpg',
            'mufomicUMN.jpg',
            'ultima-sonoraUMN.jpg',
            'qorieUMN.jpg',
            'j-cafeUMN.jpg',
            'teater-katakUMN.jpg',
            'obscuraUMN.jpg',
            'ultima-toysUMN.jpg',
            'umnpc.jpg',
            'aisec.jpg',
            'uesc.jpg',
            'mapala.jpg',
            'rencang.jpg',
            'game-dev-club.jpg',
            'fortius.jpg',
        ];
        $captions = [
            'Softball',
            'Volleyball',
            'Lions Basketball',
            'Lions Futsal',
            'Lions Badminton',
            'Capoeira',
            'Tennis Meja',
            'Taekwondo',
            'Spectre',
            'Tracce',
            'Street Dance',
            'UMN Symphony Orchestra',
            'Mufomic',
            'Ultima Sonora',
            'Qorie',
            'J-Cafe',
            'Teater Katak',
            'Obscura',
            'Ultima Toys',
            'UMN PC',
            'AISEC',
            'UESC',
            'Mapala',
            'Rencang',
            'Game Dev Club',
            'Fortius Esport',
        ];
        $links = [
            'https://uscope.umn.ac.id/activities/softball',
            'https://uscope.umn.ac.id/activities/volleyball',
            'https://uscope.umn.ac.id/activities/lions-basketball',
            'https://uscope.umn.ac.id/activities/lions-futsal',
            'https://uscope.umn.ac.id/activities/lions-badminton',
            'https://uscope.umn.ac.id/activities/capoeira',
            'https://uscope.umn.ac.id/activities/tennis-meja',
            'https://uscope.umn.ac.id/activities/taekwondo',
            'https://uscope.umn.ac.id/activities/spectre',
            'https://uscope.umn.ac.id/activities/tracce',
            'https://uscope.umn.ac.id/activities/friday-noon-guest',
            'https://uscope.umn.ac.id/activities/umn-symphony-orchestra',
            'https://uscope.umn.ac.id/activities/mufomic',
            'https://uscope.umn.ac.id/activities/ultima-sonora',
            'https://uscope.umn.ac.id/activities/qorie',
            'https://uscope.umn.ac.id/activities/j-cafe',
            'https://uscope.umn.ac.id/activities/teater-katak',
            'https://uscope.umn.ac.id/activities/obscura',
            'https://uscope.umn.ac.id/activities/ultima-toys',
            'https://uscope.umn.ac.id/activities/umnpc',
            'https://uscope.umn.ac.id/activities/aiesec',
            'https://uscope.umn.ac.id/activities/uesc',
            'https://uscope.umn.ac.id/activities/mapala',
            'https://uscope.umn.ac.id/activities/rencang',
            'https://uscope.umn.ac.id/activities/game-dev-club',
            'https://uscope.umn.ac.id/activities/fortius',
            
        ];
        return view::make('ukm')
        ->with('ukm' ,  ukm::all()) 
        ->with('programsukm', programsukm::all())
        ->with('ukm2' ,  ukm2::all());
    }

    public function show()
    {
    return view::make('ukm')
    ->with('ukm' ,  ukm::all()) 
    ->with('programsukm', programsukm::all())
    ->with('ukm2' ,  ukm2::all());
    }

    public function showadmin()
    {
    return view::make('admin.adminukm')
    ->with('ukm' ,  ukm::all())
    ->with('programsukm', programsukm::all())
    ->with('ukm2' ,  ukm2::all());
    }

    //PROFILE
    public function createprofile()
    {
        return view('admin.adminadd-profileukm');
    }

    public function storeprofile(Request $request)
    {
        $data=ukm::create($request->all());
        return redirect('/adminukm');
    }

    public function editprofile(Request $request, $id)
    {
        $data = ukm::findOrFail($id);
        return view('admin.adminedit-profileukm',['ukm'  => $data]);
    }

    public function updateprofile(Request $request, $id)
    {
        $data = ukm::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminukm');
    }

    public function deleteprofile($id)
    {
        $data = ukm::findOrFail($id);
        return view('admin.admindelete-profileukm',['ukm'  => $data]);
    }

    public function destroyprofile($id)
    {
        $deleteData =  DB::table('ukms')->where('id', $id)->delete();
        return redirect('/adminukm');
    }

    // Edit Logo
    public function editlogo(Request $request, $id)
    {
        $data = ukm2::findOrFail($id);
        return view('admin.adminedit-logoukm',['ukm2'  => $data]);
    }


    public function updatelogo(Request $request, $id)
    {

        $data = ukm2::findOrFail($id);
        $newName = $data->image1; 

        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $extension = $file->getClientOriginalExtension();
            $newName = 'Logo UKM- ' .$request->input('judul1') . now()->timestamp . '.' . $extension;
            $file->storeAs('public/Program', $newName);
        }

        $data->nama = $request->input('nama');
        $data->judul1 = $request->input('judul1');
        $data->image1 = $newName;

        $data->save();

        return redirect('/adminukm');
    }



    // Edit ukm Baru
    public function editukm1(Request $request, $id)
    {
        $data = ukm2::findOrFail($id);
        return view('admin.adminedit-ukm1',['ukm2'  => $data]);
    }

    public function updateukm1(Request $request, $id)
    {
        $data = ukm2::findOrFail($id);
        $newName = $data->image2;
    
        if ($request->hasFile('image2')) {
            $extension = $request->file('image2')->getClientOriginalExtension();
            $newName = $request->input('judul2') . '- current ukm' . now()->timestamp . '.' . $extension;
            $request->file('image2')->storeAs('public/Program', $newName);
        }
    
        $data->judul2 = $request->input('judul2');
        $data->image2 = $newName;
        $data->save();
    
        return redirect('/adminukm');
    }

    // Edit ukm Lama
    public function editukm2(Request $request, $id)
    {
        $data = ukm2::findOrFail($id);
        return view('admin.adminedit-ukm2',['ukm2'  => $data]);
    }

    public function updateukm2(Request $request, $id)
    {
        $data = ukm2::findOrFail($id);
        $newName = $data->image3;
    
        if ($request->hasFile('image3')) {
            $extension = $request->file('image3')->getClientOriginalExtension();
            $newName = $request->input('judul3') . '- previous ukm' . now()->timestamp . '.' . $extension;
            $request->file('image3')->storeAs('public/Program', $newName);
        }
    
        $data->judul3 = $request->input('judul3');
        $data->image3 = $newName;
        $data->save();
    
        return redirect('/adminukm');
    }

    //tambah program ukm
    public function createprogramsukm()
    {
        return view('admin.adminadd-programsukm');
    }

    public function storeprogramsukm(Request $request)
    {

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = $request->input('judul') . '.' . $extension;
            $file->storeAs('public/ProgramsUkm', $newName);
        }
        
                
        $programsukm = ProgramsUkm::create([
            'judul' => $request->input('judul'),
            'narasi' => $request->input('narasi'),
            'image' => $newName,
            'link' => $request->input('link')
        ]);
        
        $programsukm->save();
           
        return redirect('/adminukm');
    }

    //EDIT PROGRAM 
    public function editprogramsukm(Request $request, $id)
    {
        $data = programsukm::findOrFail($id);
        return view('admin.adminedit-programsukm',['programsukm'  => $data]);
    }

    public function updateprogramsukm(Request $request, $id)
    {
        $data = ProgramsUkm::findOrFail($id);
    
        $newName = $data->image;
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = $request->input('judul') . '.' . $extension;
            $file->storeAs('public/ProgramsUkm', $newName);
        }
    
        $data->update([
            'judul' => $request->input('judul'),
            'narasi' => $request->input('narasi'),
            'image' => $newName,
            'link' => $request->input('link')
        ]);
    
        return redirect('/adminukm');
    }
    
    public function deleteprogramsukm($id)
    {
        $data = programsukm::findOrFail($id);
        return view('admin.admindelete-programsukm',['programsukm'  => $data]);
    }

    public function destroyprogramsukm($id)
    {
        $deleteData =  DB::table('programsukms')->where('id', $id)->delete();
        return redirect('/adminukm');
    }

}
