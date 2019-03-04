<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aliado;

class AliadosController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $aliados = Aliado::all();
        return view('admin.aliado.list')->with(compact('aliados'));
    }

    public function showFrmRegistro()
    {
        return view('admin.aliado.new');
    }

    public function doRegistro(Request $request)
    {
        $aliado = new Aliado($request->all());
        $aliado->save();
        return redirect(route('aliados.index'))->with('status', 'Se ha registrado un nuevo aliado.');
    }

    public function showFrmEditar($id)
    {
        $aliado = Aliado::findOrFail($id);
        return view('admin.aliado.edit')->with(compact('aliado'));
    }

    public function doEditar(Request $req)
    {
        $aliado = Aliado::find($req->get('id'));
        $aliado->nombre = $req->get('nombre');
        $aliado->direccion = $req->get('direccion');
        $aliado->sitio_web = $req->get('sitio_web');
        $aliado->telefono = $req->get('telefono');
        $aliado->facebook = $req->get('facebook');
        $aliado->twitter = $req->get('twitter');
        $aliado->instagram = $req->get('instagram');
        $aliado->email = $req->get('email');
        $aliado->descripcion = $req->get('descripcion');
        $aliado->update();
        return redirect(route('aliados.index'))->with('status', 'Se ha actualizado un aliado.');
    }

    public function doEliminar($id) 
    {
        $aliado = Aliado::where('id', $id)->firstOrFail();
        $aliado->delete();
        return redirect(route('aliados.index'))->with('status', 'Se ha eliminado un aliado.');
    }
}
