<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();

            switch ($user->role) {

                case 'admin':
                    return redirect()->route('admin.dashboard');

                case 'guru':
                    return redirect()->route('guru.dashboard');

                case 'siswa':
                    return redirect()->route('siswa.dashboard');

                default:
                    Auth::logout();

                    return redirect()
                        ->route('login')
                        ->withErrors([
                            'email' => 'Role akun tidak dikenali.',
                        ]);
            }
        }

        return back()
            ->withErrors([
                'email' => 'Email atau password salah.',
            ])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}