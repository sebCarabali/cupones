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

    /**
     * Load all my cupons
    */
    public function index() 
    {

    }

    public function comprar($id) {
        $cupon = Cupon::whereId($id)->firstOrFail();
        return view('pay')->with(compact('cupon'));
    }
}
