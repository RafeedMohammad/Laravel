<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('user.register');
    }

    public function register(){
$this->validate(request(),[
    'password'=>'confirmed'
]);

        User::create(['username'=>request('username'),
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'address' =>request('address'),
            'phone'=>request('phone'),
            'gender'=>request('gender'),
            'email'=>request('email'),
            'password'=>bcrypt(request('password'))

        ]);

        return 'registerd';
    }
}
