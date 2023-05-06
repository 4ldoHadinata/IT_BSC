<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request) {
        // Cara 1
        // $username = $request->input('username');
        // $password = $request->input('password');
        // $user = User::where([['username', '=', $username], ['password', '=', $password]])->first();
        // if ($user) {
        //     Auth::login($user, true);
        //     return redirect('template');
        // } else {
        //     echo "<script>window.alert('Username dan password yang anda masukkan salah');window.history.back();</script>";
        // }

        // Cara 2
        $username = $request->input('username');
        $password = $request->input('password');
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect('template');
        } else {
            echo "<script>window.alert('Username dan password yang anda masukkan salah');window.history.back();</script>";
        }

        // Cara 3
        // $request->validate([
        //     'username' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);
        // $credentials = $request->only('username', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect('template');
        // } else {
        //     echo "<script>window.alert('Username dan password yang anda masukkan salah');window.history.back();</script>";
        // }
    }
}
