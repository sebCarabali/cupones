@extends('layouts.master')
@section('titulo')
Comprar
@endsection
@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <aside class="sidebar-left">
                <div class="box clearfix">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Cupon</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $item)
                            <tr>
                                <td>
                                    {{ $item->titulo }}
                                </td>
                                <td>
                                    {{ $item->qty}}
                                </td>
                                <td>
                                    {{ $item->qty * $item->precio * (1 - $item->porcentaje_descuento / 100) }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <ul class="cart-total-list text-center mb0">
                        <li><span>Total</span><span>${{$total}}</span>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
        <div class="col-md-8">
            <div class="row">
                @foreach ($errors->all() as $err)
                <p class="alert alert-danger">
                    {{ $err }}
                </p>
                @endforeach
                <div class="col-md-6">
                    <h3>Pay Via Credit/Debit Card</h3>
                    <form action="{{route('cupon.comprar')}}" method="post">

                        @csrf
                        @if (!Auth::check())
                        <!-- <legend>Personal Information</legend> -->
                        <div class="form-group">
                            <label for="nombre">Nombres</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellidos</label>
                            <input type="text" name="apellido" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="identificacion">Identificación</label>
                            <input type="text" name="identificacion" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" required class="form-control">
                        </div>
                        @endif
                        <legend>Card Information</legend>
                        <div class="cc-form">
                            <div class="clearfix">
                                <div class="form-group form-group-cc-number">
                                    <label>Card Number</label>
                                    <input placeholder="xxxx xxxx xxxx xxxx" type="text" class="form-control" /><span
                                        class="cc-card-icon"></span>
                                </div>
                                <div class="form-group form-group-cc-cvc">
                                    <label>CVC</label>
                                    <input placeholder="xxxx" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="form-group form-group-cc-name">
                                    <label>Cardholder Name</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group form-group-cc-date">
                                    <label>Valid Thru</label>
                                    <input placeholder="mm/yy" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Confirmar compra.">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
</div>

@endsection
