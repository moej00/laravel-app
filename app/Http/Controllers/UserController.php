<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    #show register/create form
    public function create() {
        return view('users.register');
    }

    #create new users
    public function store(Request $request){
        $formFields = $request->validate([
            'name'=> ['required', 'min:2'],
            'email'=> ['required', 'email', Rule::unique('users','email')],
            'password'=> 'required|confirmed|min:6'
        ]);

        #hash password
        $formFields['password'] = bcrypt($formFields['password']);

        #create user
        $user = User::create($formFields);

        #login
        auth()->login($user);
        
        return redirect('/')-> with('message', 'user created and logged in');
    }
}

