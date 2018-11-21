<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Ssolicitante;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'NuiSot' => 'required|string|min:7|max:12|unique:tsolicitante',
            'DirSot' => 'required|string|min:10|max:175',
            'TelSot' => 'required|string|min:10|max:75',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /*return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        */ 
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return ['email' => $data['email'],
        'password' =>$data['password'],];
        /*
        $TUser=new User;
        $TUser->name=$data['name'];
        $TUser->email=$data['email'];
        $TUser->password=Hash::make($data['password']);
        $TUser->save();
        $TSol=new Ssolicitante;
        $TSol->IdUseSot=$TUser->id;
        $TSol->NuiSot=$data['NuiSot'];
        $TSol->RazSot=$data['name'];
        $TSol->DirSot=$data['DirSot'];
        $TSol->EmaSot=$data['email'];
        $TSol->TelSot=$data['TelSot'];
        $TSol->save();  
        return User::find([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' =>$data['password'],
        ]);*/ 
        
    }
}
