<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriaFormRequest;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $categorias = Categoria::paginate(10);
        return view('admin.categoria.list')->with(compact('categorias'));
    }

    public function showFrmRegistrar()
    {
        return view('admin.categoria.new');
    }

    public function doRegistrar(CategoriaFormRequest $req)
    {
        $categoria = new Categoria();
        $categoria->nombre = $req->get('nombre');
        $categoria->save();
        return redirect(route('admin.categoria.index'))
                ->with('status', 'Categoria agregada correctamente.');
    }

    public function showFrmEditar($id)
    {
        $categoria = Categoria::whereId($id)->firstOrFail();
        return view('admin.categoria.edit')->with(compact('categoria'));
    }

    public function doEditar(Request $req, $id)
    {
        $categoria = Categoria::whereId($id)->firstOrFail();
        $existeCategoriaConNombre = Categoria::where('nombre', '=', $req->nombre)->first();
        if($existeCategoriaConNombre != null) {
            return back()->with(compact($categoria))
                    ->withErrors(['nombre' => ['Ya existe una categoria registrada con ese nombre']]);
        }
        
        $categoria->nombre = $req->get('nombre');
        $categoria->save();

        return redirect(route('admin.categoria.index'))
                ->with('status', 'Categoria editada correctamente.');
    }
}
