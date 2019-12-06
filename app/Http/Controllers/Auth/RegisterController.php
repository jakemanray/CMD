<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Perfil;
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
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'nacimiento' => ['required', 'string'],
            'perfil_id' => ['required', 'integer'],
            'rol_id' => ['required', 'integer'],
            'escalafon_id' => ['required', 'integer'],
            'titulo' => ['required', 'string', 'max:255'],
            'tipoContrato' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

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

        return User::create([
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'nacimiento' => $data['nacimiento'],
            'perfil_id' => $data['perfil_id'],
            'rol_id' => $data['rol_id'],
            'escalafon_id' => $data['escalafon_id'],
            'titulo' => $data['titulo'],
            'tipoContrato' => $data['tipoContrato'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),


        ]);
    }


}
