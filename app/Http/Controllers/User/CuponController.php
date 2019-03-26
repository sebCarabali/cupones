<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cupon;

class CuponController extends Controller
{
    public function __construct()
    {
        #$this->middleware('guest');
    }

    public function comprar() {
        $cart = \Session::get('cart');
        return view('pay')->with(compact('cart'));
    }
}
