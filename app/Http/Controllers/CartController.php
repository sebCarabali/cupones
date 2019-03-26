<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cupon;

class CartController extends Controller
{

    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    public function show()
    {
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('cart.index')->with(compact('cart', 'total'));
    }

    public function add($cuponId)
    {
        $cart = \Session::get('cart');
        $cupon = Cupon::whereId($cuponId)->firstOrFail();
        if(isset($cart[$cuponId])) {
            $cupon->qty = $cart[$cuponId]->qty + 1;
        } else {
            $cupon->qty = 1;
        }        
        $cart[$cuponId] = $cupon;
        \Session::put('cart', $cart);
        return redirect()->route('cart.show');
    }

    public function update($cuponId, $qty)
    {
        $cart = \Session::get('cart');
        $cart[$cuponId]->qty = $qty;
        \Session::put('cart', $cart);
        return redirect()->route('cart.show');
    }

    public function delete($cuponId)
    {
        $cart = \Session::get('cart');
        unset($cart[$cuponId]);
        \Session::put('cart', $cart);
        return redirect()->route('cart.show');
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
