<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cupon;

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
}
