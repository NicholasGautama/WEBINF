<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Role;
use App\Models\Dosen;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

/**
 * Get a validator for an incoming registration request.
 *
 * @param  array  $data
 * @return \Illuminate\Contracts\Validation\Validator
 */
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

    $validator = Validator::make($data, $rules);

    // // Cek jika dosen sudah terdaftar saat melakukan registrasi dosen sebagai admin
    // $validator->after(function ($validator) use ($data) {
    //     if (isset($data['role_id']) && $data['role_id'] == 1) { // Assuming role_id 1 is for dosen
    //         $dosen = \App\Models\Dosen::where('kontak', $data['email'])->first();
    //         if (!$dosen) {
    //             $validator->errors()->add('email', 'Email is not registered as dosen.');
    //         }
    //     }
    // });

    return $validator;
    // return Validator::make($data, $rules);
}


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $dosen = Dosen::where('kontak', $data['email'])->first();

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => $data['role_id'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        $roles = Role::all();
    
        return view('auth.register', ['roles' => $roles]);
    }
    
}
