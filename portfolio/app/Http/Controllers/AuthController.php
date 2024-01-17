<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->input('email'))->first();

        if ($admin && Hash::check($request->input('password'), $admin->password)) {
            // Store admin details in session
            $request->session()->put('admin', $admin);

            // Redirect to a secure page
            return redirect('/admin/dashboard');
        }

        return view('admin.login');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect('/');
    }
}
