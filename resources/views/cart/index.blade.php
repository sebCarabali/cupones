@extends('layouts.master')
@section('titulo')
Carrito de compras
@endsection
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table cart-table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                    <tr>
                        <td><a href="{{ route('cupon.show', $item->id) }}">{{ $item->titulo }}</a>
                        </td>
                        <td class="cart-item-quantity">
                            <input id="item_{{$item->id}}" type="number" name="cart-quantity" style="width:6rem" min="1"
                                max="{{ $item->cantidad }}" class="cart-quantity" value="{{$item->qty}}" /> 
                                <a
                                    class="quantity-update btn btn-small btn-warning"
                                    data-href="/cupon/updateCarrito"
                                    data-id="{{$item->id}}" >
                                <i class="fa fa-retweet" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>
                            ${{ $item->precio * (1 - $item->porcentaje_descuento / 100) }}
                        </td>
                        <td>
                            ${{ $item->precio * (1 - $item->porcentaje_descuento / 100) * $item->qty }}
                        </td>
                        <td class="cart-item-remove">
                            <a href=" {{route('cart.delete', $item->id)}}">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <ul class="cart-total-list">
                <li><span>Total</span><span>${{ $total }}</span>
                </li>
            </ul>
            <a href="{{route('cupon.comprar')}}" class="btn btn-primary btn-lg">Continuar</a>
        </div>
    </div>
    <div class="gap"></div>
</div>


@endsection
