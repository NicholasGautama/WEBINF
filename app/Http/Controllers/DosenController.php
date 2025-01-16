<?php

namespace App\Http\Controllers;

use View;
use App\Models\dosen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function show(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $dosen = dosen::where('nama', 'like', "%{$query}%")
                            ->orWhere('kontak', 'like', "%{$query}%")
							->orWhere('matkul', 'like', "%{$query}%")
							->orWhere('nidn', 'like', "%{$query}%")
							->orWhere('research', 'like', "%{$query}%")
							->orWhere('prodi', 'like', "%{$query}%")
							->orWhere('sinta', 'like', "%{$query}%")
							->orWhere('tautan_sinta', 'like', "%{$query}%")
							->orWhere('scopus', 'like', "%{$query}%")
							->orWhere('tautan_scopus', 'like', "%{$query}%")
							->orWhere('staff_handbook', 'like', "%{$query}%")
                            ->get();
        } else {
            $dosen = dosen::all();  // Ambil semua data dosen tanpa paginasi
        }

        return view::make('dosen')->with('dosen', $dosen);
    }

    public function showadmin(Request $request){
        $userEmail = Auth::user()->email;
        $roleId = Auth::user()->role_id;
        if ($roleId == 1) {
            $dosen = dosen::where('kontak', $userEmail)->get(); // Filter dosen berdasarkan email
            return view('admin.admindosen')->with('dosen', $dosen);
        }
        $query = $request->input('query');

        if ($query) {
            $dosen = dosen::where('nama', 'like', "%{$query}%")
                            ->orWhere('kontak', 'like', "%{$query}%")
							->orWhere('matkul', 'like', "%{$query}%")
							->orWhere('nidn', 'like', "%{$query}%")
							->orWhere('research', 'like', "%{$query}%")
							->orWhere('prodi', 'like', "%{$query}%")
							->orWhere('sinta', 'like', "%{$query}%")
							->orWhere('tautan_sinta', 'like', "%{$query}%")
							->orWhere('scopus', 'like', "%{$query}%")
							->orWhere('tautan_scopus', 'like', "%{$query}%")
							->orWhere('staff_handbook', 'like', "%{$query}%")
                            ->get();  // Ambil semua data yang sesuai dengan query tanpa paginasi
        } else {
            $dosen = dosen::all();  // Ambil semua data dosen tanpa paginasi
        }
        return view::make('admin.admindosen')
        ->with('dosen' ,  $dosen);
    }

    public function create()
    {
        return view('admin.adminadd-dosen');
    }

    public function store(Request $request)
	{
		/*
		$request->validate([
			'nama' => 'required|string|max:255', // Wajib, tipe string, maksimal 255 karakter
			'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Opsional, tipe gambar (JPEG, PNG, JPG), maksimal 2MB
			'kontak' => 'required|string|max:255', // Wajib, tipe string, maksimal 255 karakter
			'matkul' => 'nullable|string|max:255', // Opsional, tipe string, maksimal 255 karakter
			'nidn' => 'required|string|max:255', // Wajib, tipe string, maksimal 255 karakter
			'research' => 'nullable|string|max:10000', // Opsional, tipe string, maksimal 10.000 karakter
			'fakultas' => 'required|string|max:100', // Wajib, tipe string, maksimal 100 karakter
			'prodi' => 'required|string|max:255', // Wajib, tipe string, maksimal 255 karakter
			'sinta' => 'nullable|string|max:255', // Opsional, tipe string, maksimal 255 karakter
			'tautan_sinta' => 'nullable|url|max:255', // Opsional, tipe URL, maksimal 255 karakter
			'scopus' => 'nullable|string|max:255', // Opsional, tipe string, maksimal 255 karakter
			'tautan_scopus' => 'nullable|url|max:255', // Opsional, tipe URL, maksimal 255 karakter
			'staff_handbook' => 'nullable|file|mimes:pdf|max:5120', // Opsional, tipe file (PDF), maksimal 5MB
		]);*/

		$newImageName = '';
		$newHandbookName = '';

		// Handle image upload
		if ($request->hasFile('image')) {
			$extension = $request->file('image')->getClientOriginalExtension();
			$newImageName = $request->input('prodi') . '-' . 'dosen' . '-' . now()->timestamp . '.' . $extension;
			$request->file('image')->storeAs('public/Lecturer', $newImageName);
		}

		// Handle PDF upload for staff_handbook
		if ($request->hasFile('staff_handbook')) {
			$extension = $request->file('staff_handbook')->getClientOriginalExtension();

			// Ensure the uploaded file is a PDF
			if ($extension !== 'pdf') {
				return back()->withErrors(['staff_handbook' => 'Only PDF files are allowed for Staff Handbook.']);
			}

			$newHandbookName = $request->input('prodi') . '-' . 'staff-handbook' . '-' . now()->timestamp . '.' . $extension;
			$request->file('staff_handbook')->storeAs('public/StaffHandbook', $newHandbookName);
		}

		// Merge new file names with request data
		$data = array_merge($request->all(), [
			'image' => $newImageName,
			'staff_handbook' => $newHandbookName
		]);

		// Create new record in the database
		dosen::create($data);

		// Redirect to the appropriate route
		return redirect('/admindosen');
	}

    public function edit(Request $request, $id)
    {
        $data = dosen::findOrFail($id);
        return view('admin.adminedit-dosen',['dosen'  => $data]);
    }

	public function update(Request $request, $id)
	{
		$dosen = Dosen::findOrFail($id);
		$newImageName = $dosen->image;
		$newHandbookName = $dosen->staff_handbook;

		// Handle image upload
		if ($request->hasFile('image')) {
			$extension = $request->file('image')->getClientOriginalExtension();
			$newImageName = $request->input('prodi') . '-' . 'dosen' . now()->timestamp . '.' . $extension;
			$request->file('image')->storeAs('public/Lecturer', $newImageName);
		}

		// Handle staff handbook upload
		if ($request->hasFile('staff_handbook')) {
			$extension = $request->file('staff_handbook')->getClientOriginalExtension();

			// Ensure the file is a PDF
			if ($extension !== 'pdf') {
				return back()->withErrors(['staff_handbook' => 'Only PDF files are allowed for Staff Handbook.']);
			}

			$newHandbookName = $request->input('prodi') . '-' . 'staff-handbook' . now()->timestamp . '.' . $extension;
			$request->file('staff_handbook')->storeAs('public/StaffHandbook', $newHandbookName);
		}

		// Update the database fields
		$dosen->nama = $request->input('nama');
		$dosen->kontak = $request->input('kontak');
		$dosen->matkul = $request->input('matkul');
		$dosen->nidn = $request->input('nidn');
		$dosen->image = $newImageName;
		$dosen->fakultas = $request->input('fakultas');
		$dosen->research = $request->input('research');
		$dosen->prodi = $request->input('prodi');
		$dosen->sinta = $request->input('sinta');
		$dosen->tautan_sinta = $request->input('tautan_sinta');
		$dosen->scopus = $request->input('scopus');
		$dosen->tautan_scopus = $request->input('tautan_scopus');
		$dosen->staff_handbook = $newHandbookName;
		$dosen->save();

		// Redirect to the appropriate page
		return redirect('/admindosen');
	}
    

    public function delete($id)
    {
        $data = dosen::findOrFail($id);
        return view('admin.admindelete-dosen',['dosen'  => $data]);
    }

    public function destroy($id)
    {
        $deleteData =  DB::table('dosens')->where('id', $id)->delete();
        return redirect('/admindosen');
    }

}