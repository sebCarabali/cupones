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
}
