<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cupon;
use App\Aliado;
use App\Categoria;

class CuponController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $cupones = Cupon::paginate(10);
        return view('admin.cupon.list')->with(compact('cupones'));
    }

    public function showFrmRegistro()
    {
        $aliados = Aliado::all();
        $categorias = Categoria::all();
        return view('admin.cupon.new')->with(compact('aliados', 'categorias'));
    }

    public function doRegistro(Request $request)
    {
        $cupon = new Cupon();
        $categoria = Categoria::whereId($request->get('categoria'))->firstOrFail();
        $aliado = Aliado::whereId($request->get('aliado'))->firstOrFail();
        $cupon->titulo = $request->get('titulo');
        $cupon->fecha_caducidad = $request->get('fecha_caducidad');
        $cupon->cantidad = $request->get('cantidad');
        $cupon->descripcion = $request->get('descripcion');
        $cupon->condiciones = $request->get('condiciones');
        $cupon->porcentaje_descuento = $request->get('porcentaje_descuento');
        $cupon->precio = $request->get('precio');
        $cupon->aliado()->associate($aliado);
        $cupon->categoria()->associate($categoria);
        $cupon->save();
        return redirect(route('admin.cupon.index'))
            ->with('status', 'se ha creado un nuevo cupón');
    }

    public function showFrmEditar($id)
    {
        $cupon = Cupon::whereId($id)->firstOrFail();
        $aliados = Aliado::all();
        $categorias = Categoria::all();
        return view('admin.cupon.edit')
                ->with(compact('cupon', 'aliados', 'categorias'));
    }

    public function doEditar(Request $request, $id)
    {
        $cupon = Cupon::whereId($id)->firstOrFail();
        $categoria = Categoria::whereId($request->get('categoria'))->firstOrFail();
        $aliado = Aliado::whereId($request->get('aliado'))->firstOrFail();
        $cupon->titulo = $request->get('titulo');
        $cupon->fecha_caducidad = $request->get('fecha_caducidad');
        $cupon->cantidad = $request->get('cantidad');
        $cupon->descripcion = $request->get('descripcion');
        $cupon->condiciones = $request->get('condiciones');
        $cupon->porcentaje_descuento = $request->get('porcentaje_descuento');
        $cupon->precio = $request->get('precio');
        $cupon->aliado()->associate($aliado);
        $cupon->categoria()->associate($categoria);
        $cupon->save();
        return redirect(route('admin.cupon.index'))
            ->with('status', 'se ha editado el cupón');
    }
}
