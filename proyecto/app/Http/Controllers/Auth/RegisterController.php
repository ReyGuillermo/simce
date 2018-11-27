<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Rol_user;
use App\Sempresas;
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
            'name' => 'required|string|min:5|max:175',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'NitEst' => 'required|string|min:7|max:12|unique:tuserestab',
            'DirEst' => 'required|string|min:10|max:170',
            'TelEst' => 'required|string|min:10|max:75',            
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
        $TUser=new User;
        $TUser->name=$data['name'];
        $TUser->email=$data['email'];
        $TUser->password=Hash::make($data['password']);
        $TUser->save();
        $TEst=new Sempresas;
        $TEst->IdUsuEst=$TUser->id;
        $TEst->NitEst=$data['NitEst'];
        $TEst->RazEst=$data['name'];
        $TEst->DirEst=$data['DirEst'];
        $TEst->EmaEst=$data['email'];
        $TEst->TelEst=$data['TelEst'];
        $TEst->save(); 
        $TRol=new Rol_user;
        $TRol->user_id=$TUser->id;
        $TRol->role_id=2;       
        $TRol->save();   
        return $TUser;        
    }
}
