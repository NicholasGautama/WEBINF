<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;
use App\Models\UserAccess;
use App\Models\Carousel;
use App\Models\Berita;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function show()
    {
        $userAccesses = UserAccess::all(); // Mengambil semua  data dari tabel user_access
        $users = User::all();
        return view('admin.alladmin')
            ->with('users', $users)
            ->with('userAccesses', $userAccesses);
    }    
    

    public function showadmin()
    {
        $data = User::all();
        return view('admin.adminsekilas', ['user' => $data]);
    }

    public function edit(Request $request, $id)
    {
        $data = User::findOrFail($id);
        return view('admin.adminedit-sekilas', ['user' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminsekilas');
    }

    public function updateAccess(Request $request)
    {
        // Mendapatkan data dari permintaan Ajax
        $userId = $request->input('userId');
        $accessType = $request->input('accessType');
        $isChecked = $request->input('isChecked');

        // Lakukan pembaruan di tabel user_access berdasarkan data yang diterima

        // Mengembalikan respons (jika diperlukan)
        return response()->json(['success' => true]);
    }

    public function saveChanges(Request $request)
    {
        // Mendapatkan data dari permintaan Ajax
        $formData = $request->input('formData');

        // Melakukan iterasi dan menyimpan perubahan ke tabel user_access berdasarkan data yang diterima

        // Mengembalikan respons (jika diperlukan)
        return response()->json(['success' => true]);
    }

    protected function validator(array $data)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        if (auth()->check() && auth()->user()->role_id === 2) {
            // Admin user, allow selecting any role
            $rules['role_id'] = ['required', 'exists:roles,id'];
        } else {
            // Non-admin user, limit role selection to role 1 (dosen) or role 3 (student)
            $rules['role_id'] = ['required', 'in:1,3'];
        }

        return Validator::make($data, $rules);
    }

    public function createadmin(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required', 'exists:roles,id'],
        ]);
    
        $admin = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => $data['role_id'],
            'password' => Hash::make($data['password']),
        ]);
    
        // Ambil data untuk carousel
        $carousel = Carousel::inRandomOrder()->get();
    
        // Ambil data berita untuk tampilan
        $berita = Berita::orderBy('tanggal', 'desc')->get();
        $nama_bulan = date('F', strtotime($berita[0]->tanggal));
        $tanggal = date('j, Y', strtotime($berita[0]->tanggal));
        $tanggal_format = $nama_bulan . ', ' . $tanggal;
        $berita_lainnya = Berita::where('id', '!=', $berita[0]->id)->inRandomOrder()->take(5)->get();
    
        return view('adminpage', compact('carousel', 'berita', 'berita_lainnya', 'tanggal_format'));
    }
    

    public function showform()
    {
        $roles = Role::all();

        return view('admin.addadmin', ['roles' => $roles]);
    }

    public function editadmin(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $userAccesses = UserAccess::all();
        return view('admin.adminedit-alladmin')
            ->with('user', $user)
            ->with('userAccesses', $userAccesses);
    }

    public function updateadmin(Request $request, $id)
    {
        // Find the user access records for the given user ID
        $userAccesses = UserAccess::where('user_id', $id)->get();

        foreach ($userAccesses as $userAccess) {
            $userAccess->home = $request->has('home') ? 1 : 0;
            $userAccess->about = $request->has('about') ? 1 : 0;
            $userAccess->academic = $request->has('academic') ? 1 : 0;
            $userAccess->research = $request->has('research') ? 1 : 0;
            $userAccess->student = $request->has('student') ? 1 : 0;
            $userAccess->news = $request->has('news') ? 1 : 0;
            $userAccess->contact = $request->has('contact') ? 1 : 0;
            $userAccess->save();
        }

        return redirect('alladmin');
    }

    public function deleteadmin($id)
    {
        $user = User::findOrFail($id);
        return view('admin.admindelete-admin', ['user' => $user]);
    }
    
    public function destroy($id)
    {
        $deleteData = DB::table('users')->where('id', $id)->delete();
        return redirect('/alladmin');
    }
    
    // public function showdosenrole()
    // {
    //     $dosenusers = User::whereIn('role_id', [1, 4])->get();

    //     return view('admin.adminupdate-dosenrole', ['dosenusers' => $dosenusers]);
    // }

    // public function updatedosenrole(Request $request, $id)
    // {
    //     $request->validate([
    //         'role_id' => 'required|in:1,4', // Validates that the role is either 1 or 4
    //     ]);

    //     $user = User::findOrFail($id);
    //     $user->role_id = $request->role_id;
    //     $user->save();

    //     return response()->json(['success' => true]);
    // }
}


