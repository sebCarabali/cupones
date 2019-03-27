<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Compra;

class ComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function show()
    {
        $compras = Compra::paginate(10);
        return view('admin.compra.show')->with(compact('compras'));
    }

    public function showDetalle($idCompra)
    {
        $compra = Compra::find($idCompra)->firstOrFail();
        $detalleCompra = DB::table('detallecompra')
                        ->join('cupon', 'cupon.id', '=', 'detallecompra.id_cupon')
                        ->where('id_compra', '=', $idCompra)->paginate(10);
                        
        return view('admin.compra.detail')->with(compact('compra', 'detalleCompra'));
    }
}
