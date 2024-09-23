<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
    
            if ($user->is_admin == 0) {
                return redirect()->route('frontend.homepage'); // Redirect ke halaman user biasa
            } else if ($user->is_admin == 1) {
                return redirect()->route('admin.dashboard.index'); // Redirect ke halaman admin
            }
        } else {
            return redirect('login')->with('error_message', 'Wrong email or password');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function register_form()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed'
        ]);

        User::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'password'  => Hash::make($request->input('password'))
        ]);

        return redirect('login');
    }

    // Menambahkan fitur edit profil
    public function editProfile()
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login
        return view('profile.edit', compact('user')); // Mengarahkan ke view untuk edit profil
    }

    public function updateProfile(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|min:6|confirmed'
        ]);

        // Cek jika password diisi
        // Update profil pengguna
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Jika password diisi, lakukan update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save(); // Simpan perubahan

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}
