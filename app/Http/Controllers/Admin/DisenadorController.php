<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disenador;
use App\Http\Requests\DisenadorFormRequest;
use App\Mail\DisenadorFeedbackMail;
use Illuminate\Support\Facades\Mail;
use App\Persona;
use Illuminate\Support\Facades\Hash;

class DisenadorController extends Controller
{
    public function index()
    {
        $disenadores = Persona::whereHas('disenador')->get();
        return view('admin.disenador.list')->with(compact('disenadores'));
    }

    public function showFrmRegistro()
    {
        return view('admin.disenador.new');
    }

    public function doRegistro(DisenadorFormRequest $req)
    {
        $password = str_random(12);
        $data = array(
            'password' => $password,
            'useremail' => $req->get('email')
        );
        
        $persona = new Persona();
        $cliente = new Disenador();
        $persona->nombre = $req->get('nombre');
        $persona->apellido = $req->get('apellido');
        $persona->email = $req->get('email');
        $persona->password = Hash::make($password);
        $persona->save();
        $persona->disenador()->save($cliente);

        Mail::send('mail.disenador.new', $data, function($message) use ($data) {
            $message->from('sebastiancc@unicauca.edu.co', 'Cuponia');
            $message->to($data['useremail'])->subject('Bienvenido a cuponia');
        });
        
        return redirect(route('admin.disenador.index'))
            ->with('status', 'Se ha registrado un nuevo aliado.')
            ->with('mailstatus', 'El email ha sido enviado.');
    }
}
