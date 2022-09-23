<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // show Register/Create
    public function create() {
        return view('users.register');
    }
    
    //create new user
    public function store(Request $request) {
        $formFields = $request->validate([
            'uname' => ['required', 'min:3'],
            'fname' => ['required'],
            'lname' => ['required'],
            'minitial' => ['required', 'min:1'],
            'cluster' => ['max:2'],
            'bld' => ['max:2'],
            'flr' => ['max:2'],
            'unit' => ['max:2'],
            'contact' => ['required'],
            'birthday' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //encrypt password
        $formFields['password'] = bcrypt($formFields['password']);

        //create user 
        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'Account has been created. You are now logged in!');
    }

    //user logout
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Your account has been logged out!');

    }

    //user login
    public function login(Request $request) {
        return view ('users.login');
    }

    //user authentication
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')-> with('message', 'Successfully logged in!');
        }

        return back()->withErrors(['email' => 'Invalid login credentials!'])->onlyInput('email');
    }
}
