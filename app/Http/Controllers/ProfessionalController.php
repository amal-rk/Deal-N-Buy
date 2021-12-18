<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Professional;
use Illuminate\Support\Facades\Hash;

class ProfessionalController extends Controller
{
    public function RegisterFormEn () {
        return view('english.professional.register');
    }

    public function RegisterProfessionalEn (Request $request) {


        
        $validated = $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        'username' => 'required',
        'password' => 'required',
        'dob' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'company'=>'required',
        'responsible_person'=>'required',
        'designation'=>'required',
        'company_registration_number'=>'required',
        'company_address'=>'required'
        ]);

        /* $request->input('password') = Hash::make($request->input('password')); */
        /* $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save(); */

        Professional::create($request->all());

        return $request->all();

        // return view('register');
    }

    public function LoginFormEn () {
        return view('english.professional.login');
    }
}
