<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $remember = 0;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_active' => 1], $remember)) {
            return response()->json(["status" => "success"]);
        }
        return response()->json(["status" => "error"]);
    }

    public function logout()
    {
        Auth::logout();
    }
}
