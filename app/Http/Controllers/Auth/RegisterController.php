<?php

namespace App\Http\Controllers\Auth;

use App\Persona;
use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/';


    public function showRegistrationForm()
    {
        return view('auth.registro');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function validator($data)
    {
        return Validator::make($data,  [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:personas'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     */
    protected function create(array $req)
    {
        $cliente = new Cliente();

        $persona = new Persona();
        $persona->nombre = $req['nombre'];
        $persona->apellido = $req['apellido'];
        $persona->email = $req['email'];
        $persona->password = Hash::make($req['password']);

        $persona->save();
        $persona->cliente()->save($cliente);

        return $persona;
    }
}
