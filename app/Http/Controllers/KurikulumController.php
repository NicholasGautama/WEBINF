<?php

namespace App\Http\Controllers;

use View;
use App\Models\kurikulum;
use App\Models\mkelektif;
use App\Models\alur;
use App\Models\merdeka;
use App\Models\descmatkul;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KurikulumController extends Controller
{
    public function show()
    {
        return view::make('kurikulum')
        ->with('matkuldesc' ,  descmatkul::all())
        ->with('kurikulum' ,  kurikulum::all())
        ->with('mkelektif' ,  mkelektif::all())
        ->with('merdeka', merdeka::all())
        ->with('alur', alur::all());
    }

    public function showadmin()
    {
        return view::make('admin.adminkurikulum')
        ->with('matkuldesc' ,  descmatkul::all())
        ->with('kurikulum' ,  kurikulum::all())
        ->with('mkelektif' ,  mkelektif::all())
        ->with('merdeka', merdeka::all())
        ->with('alur', alur::all());
    }

    public function create()
    {
        return view('admin.adminadd-kurikulum');
    }

	public function store(Request $request)
	{
		// Validate inputs
		$request->validate([
			'deskripsimk' => 'required|file|mimes:pdf|max:5120', // Allow PDF files up to 5MB
			'mk' => 'required|string',
		]);

		$newName = '';

		// Handle file upload
		if ($request->hasFile('deskripsimk')) {
			$extension = $request->file('deskripsimk')->getClientOriginalExtension();
			$newName = $request->input('mk') . '-' . 'kurikulum' . '-' . now()->timestamp . '.' . $extension;

			// Store file
			$request->file('deskripsimk')->storeAs('public/ModuleHandbook', $newName);
		}

		// Merge new file name with request data
		$data = array_merge($request->all(), ['deskripsimk' => $newName]);

		// Create new record
		merdeka::create($data);

		// Redirect to the appropriate route
		return redirect('/adminkurikulum');
	}


    public function edit(Request $request, $id)
    {
        $data = merdeka::findOrFail($id);
        return view('admin.adminedit-kurikulum',['merdeka'  => $data]);
    }

    public function update(Request $request, $id)
	{
		$data = merdeka::findOrFail($id);
		$newName = $data->deskripsimk;

		// Handling file upload
		if ($request->hasFile('deskripsimk')) {
			$extension = $request->file('deskripsimk')->getClientOriginalExtension();
			$newName = $request->input('mk') . '-' . 'kurikulum' . '-' . now()->timestamp . '.' . $extension;
			$request->file('deskripsimk')->storeAs('public/ModuleHandbook', $newName);
		}

		// Update record with new data and file name
		$data->update(array_merge($request->all(), ['deskripsimk' => $newName]));

		// Redirect to the appropriate route
		return redirect('/adminkurikulum');
	}

    public function editmatkul(Request $request, $id)
    {
        $data = descmatkul::findOrFail($id);
        return view('admin.adminedit-descmatkul',['matkuldesc'  => $data]);
    }

    public function updatematkul(Request $request, $id)
    {
        $data = descmatkul::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminkurikulum');
    }

    public function delete($id)
    {
        $data = merdeka::findOrFail($id);
        return view('admin.admindelete-kurikulum',['merdeka'  => $data]);
    }

    public function destroy($id)
    {
        $deleteData =  DB::table('merdekas')->where('id', $id)->delete();
        return redirect('/adminkurikulum');
    }


    public function create2()
    {
        return view('admin.adminadd-mkelektif');
    }

    public function store2(Request $request)
	{
		// Validate inputs
		$request->validate([
			'deskripsimk' => 'required|file|mimes:pdf|max:5120', // Allow PDF files up to 5MB
			'mk' => 'required|string',
		]);

		$newName = '';

		// Handle file upload
		if ($request->hasFile('deskripsimk')) {
			$extension = $request->file('deskripsimk')->getClientOriginalExtension();
			$newName = $request->input('mk') . '-' . 'kurikulum' . '-' . now()->timestamp . '.' . $extension;

			// Store file
			$request->file('deskripsimk')->storeAs('public/ModuleHandbook', $newName);
		}

		// Merge new file name with request data
		$data = array_merge($request->all(), ['deskripsimk' => $newName]);

		// Create new record
		mkelektif::create($data);

		// Redirect to the appropriate route
		return redirect('/adminkurikulum');
	}

    public function edit2(Request $request, $id)
    {
        $mkelektif = mkelektif::findOrFail($id);
        return view('admin.adminedit-mkelektif',['mkelektif'  => $mkelektif]);
    }

    public function update2(Request $request, $id)
	{
		$mkelektif = mkelektif::findOrFail($id);
		$newName = $mkelektif->deskripsimk;

		// Handling file upload
		if ($request->hasFile('deskripsimk')) {
			$extension = $request->file('deskripsimk')->getClientOriginalExtension();
			$newName = $request->input('mk') . '-' . 'kurikulum' . '-' . now()->timestamp . '.' . $extension;
			$request->file('deskripsimk')->storeAs('public/ModuleHandbook', $newName);
		}

		// Update record with new data and file name
		$mkelektif->update(array_merge($request->all(), ['deskripsimk' => $newName]));

		// Redirect to the appropriate route
		return redirect('/adminkurikulum');
	}

    public function delete2($id)
    {
        $mkelektif = mkelektif::findOrFail($id);
        return view('admin.admindelete-mkelektif',['mkelektif'  => $mkelektif]);
    }

    public function destroy2($id)
    {
        $deleteData =  DB::table('mkelektifs')->where('id', $id)->delete();
        return redirect('/adminkurikulum');
    }

    //merdeka
    public function create3()
    {
        return view('admin.adminadd-merdeka');
    }

    public function store3(Request $request)
    {
        $merdeka = merdeka::create($request->all());
        return redirect('/adminkurikulum');
    }

    public function edit3(Request $request, $id)
    {
        $merdeka = merdeka::findOrFail($id);
        return view('admin.adminedit-merdeka',['merdeka'  => $merdeka]);
    }

    public function update3(Request $request, $id)
    {
        $merdeka = merdeka::findOrFail($id);

        $merdeka->update($request->all());
        return redirect('/adminkurikulum');
    }

    public function delete3($id)
    {
        $merdeka = merdeka::findOrFail($id);
        return view('admin.admindelete-merdeka',['merdeka'  => $merdeka]);
    }

    public function destroy3($id)
    {
        $deleteData =  DB::table('merdekas')->where('id', $id)->delete();
        return redirect('/adminkurikulum');
    }

        //Alur Kurikulum
        public function create4()
        {
            return view('admin.adminadd-alur');
        }
    
        public function store4(Request $request)
        {
            $newName = '';
            
            $extension = $request->file('image')->getClientOriginalExtension();
        	$newName = $request->input('judul').'- Alur Kurikulum -'.now()->timestamp.'.'.$extension;
        	$request->file('image')->storeAs('public/Sarana', $newName);
            
            $image = Alur::create([
                'kurikulum' => $request->input('kurikulum'),
                'judul' => $request->input('judul'),
                'image' => $newName,
            ]);
            
            return redirect('/adminkurikulum');
        }
        
    
        public function edit4(Request $request, $id)
        {
            $alur = alur::findOrFail($id);
            return view('admin.adminedit-alur',['alur'  => $alur]);
        }
    
        public function update4(Request $request, $id)
        {
            $alur = alur::findOrFail($id);
    
            $alur->update($request->all());
            return redirect('/adminkurikulum');
        }
    
        public function deleteImage($id)
        {
          $alur = Alur::findOrFail($id);
          Storage::delete('public/Kurikulum'.$alur->image);
          $alur->delete();
          return redirect()->back();
        }
    
}
