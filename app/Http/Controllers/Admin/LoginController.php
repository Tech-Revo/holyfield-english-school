<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
            
        ]);

        $credential = $request->only('email', 'password');
        try {
            if (Auth::attempt($credential)) {
                $user = Auth::user();
                if ($user->user_role == 'superadmin') {
                    sweetalert()->addSuccess('Welcome ' . $user->name);
                    return redirect('admin/dashboard');
                } else {
                    sweetalert()->addWarning('Invalid email or password.');

                    return back();
                }
            } else {
                sweetalert()->addWarning('Invalid email or password.');

                return back();
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        if ($user) {
            auth()->logout();

            sweetalert()->addSuccess('Logout Successfully!');
            return redirect('/login');
        } else {
            sweetalert()->addWarning('User is not authenticated!');
            return redirect('/login');
        }
    }
}