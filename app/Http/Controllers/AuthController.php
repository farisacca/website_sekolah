<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.login');
    }

    public function processLogin(Request $request)
    {
        //
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Email tidak valid',
                'password.required' => 'Password wajib diisi',
            ]
        );

        if (Auth::attempt($credentials)) {

    $request->session()->regenerate();

    return redirect()->intended(route('admin.dashboard'))->with(
        'success',
        'Selamat datang, ' . Auth::user()->nama . '!'
    );
}

        return back()->withErrors([
            'email' => 'Kombinasi alamat email dan password tidak valid',
            ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success','Anda telah berhasil keluar dari sistem.');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
