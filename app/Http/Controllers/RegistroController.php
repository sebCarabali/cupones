<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Persona;
use Illuminate\Support\Facades\Validator;

class RegistroController extends Controller
{

    public function create() 
    {
        return view('registro');
    }

    public function doRegistro(Request $req)
    {
        $messages = [
            'unique' => 'El :attribute ' . $req->get('email') . ' ya ha sido tomado.'
        ];

        $validator = Validator::make($req->all(), [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:personas'],
            'password' => ['required', 'string', 'min:8'],
        ], $messages);

        if ($validator->fails()) {
            return redirect('/usuarios/registro')
                        ->withErrors($validator)
                        ->withInput();
        }
        

        Persona::create([
            'nombre' => $req->get('nombre'),
            'apellido' => $req->get('apellido'),
            'email' => $req->get('email'),
            'password' => Hash::make($req->get('password')),
        ]);

        return redirect('/');
    }
}
