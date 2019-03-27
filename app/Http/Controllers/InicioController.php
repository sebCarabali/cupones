<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cupon;
use App\Comentario;
use App\Categoria;

class InicioController extends Controller
{
    public function index()
    {
        $cupones = Cupon::paginate(10);
        return view('inicio')->with(compact('cupones'));
    }

    public function loadCupon($id)
    {
        $cupon = Cupon::whereId($id)->firstOrFail();
        $cupones = DB::table('cupon')->where('id_categoria', '=', $cupon->categoria->id)
                    ->where('id', '!=',$id )->get();
        return view('cupon')->with(compact('cupon', 'cupones'));
    }

    public function comentario()
    {
        return view('contact');
    }

    public function doComentario(Request $request)
    {
        Comentario::create([
            "nombres" => $request->get('nombre'),
            "email" => $request->get('email'),
            "comentario" => $request->get('comentario')
        ]);
        return redirect('/')->with('status', 'Tu comentario se ha registrado exitosamente');
    }

    public function search()
    {
        $count = Cupon::count();
        $cupones = Cupon::paginate(10);
        $categorias = DB::table('categoria')->select('nombre', 'categoria.id', DB::raw('count(categoria.id) as count'))
                    ->join('cupon', 'categoria.id', '=', 'cupon.id_categoria')
                    ->groupBy('categoria.id')
                    ->get();
        $active = "all";
        $min = DB::table('cupon')->min('precio');
        $max = DB::table('cupon')->max('precio');
        return view('search')->with(compact('count', 'cupones', 'categorias', 'active', 'min', 'max'));
    }

    public function filter($idCategoria)
    {
        $count = Cupon::count();
        $cupones = DB::table('cupon')->where('id_categoria', '=', $idCategoria)->paginate(10);
        $categorias = DB::table('categoria')->select('nombre' , 'categoria.id', DB::raw('count(categoria.id) as count'))
                    ->join('cupon', 'categoria.id', '=', 'cupon.id_categoria')
                    ->groupBy('categoria.id')
                    ->get();
        $active = Categoria::whereId($idCategoria)->firstOrFail()->nombre;
        $min = DB::table('cupon')->min('precio');
        $max = DB::table('cupon')->max('precio');
        return view('search')->with(compact('count', 'cupones', 'categorias', 'active', 'min', 'max'));
    }
}
