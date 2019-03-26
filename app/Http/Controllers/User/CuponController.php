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
use Illuminate\Support\Facades\Mail;

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
        $email = "";
        $cart = \Session::get('cart');
        $total = $this->total();
        if(Auth::check()) {
            $cliente = DB::table('clientes')->where('id_persona', '=', Auth::user()->id)->first();
            $email = Auth::user()->email;
            $compra = Compra::create([
                'id_cliente' => $cliente->id,
                'total' => $total
            ]);

            foreach($cart as $item) {
                $this->saveDetalleCompra($item, $compra->id);
            }
        } else {
            $invitado = Invitado::whereIdentificacion($request->get('identificacion'))->first();
            if($invitado == NULL) {
                $invitado = Invitado::create([
                    'email' => $request->get('email'),
                    'nombre' => $request->get('nombre'),
                    'apellido' => $request->get('apellido'),
                    'identificacion' => $request->get('identificacion')
                ]);
            }
            $email = $invitado->email;
            $compra = Compra::create([
                'id_invitado' => $invitado->id,
                'total' => $total
            ]);

            foreach($cart as $item) {
                $this->saveDetalleCompra($item, $compra->id);
            }
        }
        $this->_redimirCupon($cart, $email);
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

    private function _redimirCupon($cart, $email)
    {
        foreach($cart as $item)
        {
            $this->_enviarMail($item, $email);
        }
    }

    private function _enviarMail($item, $email)
    {
        $data = array(
            "cantidad" => $item->qty,
            "titulo" => $item->titulo,
            "descuento" => $item->porcentaje_descuento,
            "precio" => $item->precio,
            "aliado" => $item->aliado()->first()
        );
        Mail::send('mail.cupon.redimir', $data, function($message) use ($data, $email) {
            $message->from('sebastiancc@unicauca.edu.co', 'Cuponia');
            $message->to($email)->subject('Cupon');
        });
    }
}