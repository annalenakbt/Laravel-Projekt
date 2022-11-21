<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User; 

class UserController extends Controller
{
    public function register(){
        return view('einkaufliste.register');
    }

    public function user(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'], 
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/index')->with('message', 'User wurde erfolgreich angelegt');
    }
    
}
