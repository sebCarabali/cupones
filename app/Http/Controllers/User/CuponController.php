<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cupon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Compra;
use App\Cliente;
use App\Invitado;
use App\DetalleCompra;

class CuponController extends Controller
{
    public function __construct()
    {
        #$this->middleware('guest');
    }

    public function comprar() {
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('pay')->with(compact('cart', 'total'));
    }

    public function doComprar(Request $request)
    {
        $cart = \Session::get('cart');
        $total = $this->total();
        if(Auth::check()) {
            $cliente = DB::table('clientes')->where('id_persona', '=', Auth::user()->id)->first();
            $compra = Compra::create([
                'id_cliente' => $cliente->id,
                'total' => $total
            ]);

            foreach($cart as $item) {
                $this->saveDetalleCompra($item, $compra->id);
            }
        } else {
            $invitado = Invitado::whereEmail($request->get('email'))->first();
            if($invitado == NULL) {
                $invitado = Invitado::create([
                    'email' => $request->get('email'),
                    'nombre' => $request->get('nombre'),
                    'apellido' => $request->get('apellido'),
                    'identificacion' => $request->get('identificacion')
                ]);
            }

            $compra = Compra::create([
                'id_invitado' => $invitado->id,
                'total' => $total
            ]);

            foreach($cart as $item) {
                $this->saveDetalleCompra($item, $compra->id);
            }
        }
        \Session::forget('cart');
        return redirect(route('home'))
                ->with('status','Compra realizada satisfactoriamente.');
    }

    private function saveDetalleCompra($item, $id_compra)
    {
        DetalleCompra::create([
            'cantidad' => $item->qty,
            'valor' => $item->precio * (1 - $item->porcentaje_descuento / 100),
            'id_compra' => $id_compra,
            'id_cupon' => $item->id
        ]);
    }

    private function total()
    {
        $total = 0;
        $cart = \Session::get('cart');
        foreach ($cart as $item) {
            $total += $item->precio * (1 - $item->porcentaje_descuento / 100) * $item->qty;
        }
        return $total;
    }
}