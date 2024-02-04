<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index() {
        return view('admin.registrasi');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'nama' => 'required|min:2|max:50',
            'password' => 'required|min:8'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);

        User::create($validatedData);

        return redirect()->route('login.index')->with('success', 'Registrasi berhasil! Silahkan login!');
    }
}
