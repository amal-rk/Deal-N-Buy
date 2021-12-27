<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // English Views
    public function RegisterFormEn () {
        return view('english.user.register');
    }

    public function CarDealEn () {
        return view('english.user.car-deals');
    }

    public function RegisterUserEn (Request $request) {


        
        $validated = $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        'username' => 'required',
        'password' => 'required',
        'dob' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required'
        ]);

        /* $request->input('password') = Hash::make($request->input('password')); */
        /* $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save(); */

        User::create($request->all());

        return $request->all();

        // return view('register');
    }

    public function LoginFormEn () {
        return view('english.user.login');
    }



    //French Views

    public function RegisterFormFr () {
        return view('french.user.register');
    }

    public function RegisterUserFr (Request $request) {


        
        $validated = $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        'username' => 'required',
        'password' => 'required',
        'dob' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required'
        ]);

        /* $request->input('password') = Hash::make($request->input('password')); */
        /* $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save(); */

        User::create($request->all());

        return $request->all();

        // return view('register');
    }

    public function LoginFormFr () {
        return view('french.user.login');
    }
}
