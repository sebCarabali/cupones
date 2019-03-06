<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disenador;
use App\Http\Requests\DisenadorUpdateFormRequest;
use App\Mail\DisenadorFeedbackMail;
use Illuminate\Support\Facades\Mail;
use App\Persona;
use App\Aliado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DisenadorController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $disenadores = Persona::with('disenador')->has('disenador')->paginate(10);
        return view('admin.disenador.list')->with(compact('disenadores'));
    }

    public function showFrmRegistro()
    {
        $aliados = Aliado::all();
        return view('admin.disenador.new')->with(compact('aliados'));
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
        $cliente->aliados()->sync($req->get('aliados'));

        Mail::send('mail.disenador.new', $data, function($message) use ($data) {
            $message->from('sebastiancc@unicauca.edu.co', 'Cuponia');
            $message->to($data['useremail'])->subject('Bienvenido a cuponia');
        });

        return redirect(route('admin.disenador.index'))
            ->with('status', 'Se ha registrado un nuevo diseñador.')
            ->with('mailstatus', 'El email ha sido enviado.');
    }

    public function showFrmEditar($id)
    {
        #DB::connection()->enableQueryLog();
        $disenador = Disenador::whereId($id)->firstOrFail();
        $persona = Persona::whereId($disenador->id_persona)->firstOrFail();
        $aliados = Aliado::all();
        $aliadosSeleccionados = $disenador->aliados->map(function ($aliado){
            return $aliado->only('id');
        })->toArray();
        $ret = array();
        foreach($aliadosSeleccionados as $aliado => $value) {
            array_push($ret, $value['id']);
        }
        $aliadosSeleccionados = $ret;
        #$queries = DB::getQueryLog();
        #$aliados = Aliado::all();
        #$aliadosSeleccionados = $disenador->aliados;
        return view('admin.disenador.edit')->with(compact('disenador', 'aliados', 'persona', 'aliadosSeleccionados'));
    }

    public function doEditar(DisenadorUpdateFormRequest $request, $id)
    {
        #DB::connection()->enableQueryLog();
        $disenador = Disenador::whereId($id)->firstOrFail();
        $persona = Persona::whereId($disenador->id_persona)->firstOrFail();
        $persona->nombre = $request->get('nombre');
        $persona->apellido = $request->get('apellido');
        $persona->save();
        $disenador->aliados()->sync($request->get('aliados'));
        #$queries = DB::getQueryLog();
        return redirect(route('admin.disenador.index'))
            ->with('status', 'se ha modificado un diseñador');
    }
}
