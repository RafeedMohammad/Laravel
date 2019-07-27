<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ShowUserController extends Controller
{
    public function index(){
        $users=User::latest()->get();
        return view('user.showUser',compact(['users']));
    }
    public function edit($id){
       $user= User::find($id);
        return view('user.edit',compact('user'));


    }
    public function update($id){
$user=User::find($id);
$user->update([
    'username'=>request('username'),
    'firstname'=>request('firstname'),
    'lastname'=>request('lastname'),
    'address'=>request('address'),
    'phone'=>request('phone'),
    'email'=>request('email')
]);

return 'updated';
    }
}
