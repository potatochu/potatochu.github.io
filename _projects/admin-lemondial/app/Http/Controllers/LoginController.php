<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

//models
use App\Models\User;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function index()
    {
        $data = [
            'title' => 'Sign in'
        ];
        return view('login.index', compact('data'));
    }

    public function authenticate(Request $request)
    {
        $remember = false;
        if ($request->has('remember')) {
            $remember = true;
        }

        $input = $request->validate([
            'users_email' => 'required|email',
            'users_password' => 'required'
        ]);

        $user = User::where('users_email', $input['users_email'])
        ->whereIn('level_id', [1, 2])
        ->get();
        if (empty($user)) {
            throw ValidationException::withMessages([
                'message' => 'Wrong Email or Password!'
            ]);
        }

        if (Auth::attempt(['users_email' => $input['users_email'], 'password' => $input['users_password'], 'users_deleted' => '0'], $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with([
                'message'=>'Welcome, '.Auth::user()->users_full_name.'!',
                'alert-type'=>'login'
            ]);
        }

        throw ValidationException::withMessages([
            'message' => 'Wrong Email or Password!'
        ]);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function forgot()
    {
        abort(404);
    }
}
