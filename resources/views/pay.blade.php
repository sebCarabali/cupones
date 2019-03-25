@extends('layouts.master')
@section('titulo')
Comprar
@endsection
@section('contenido')
<div class="frm pay-form">
        <div class="frm-header">
            Pago de cupon <small class="titulo-pago">({{ $cupon->titulo }})</small>
        </div>
    <form method="post" action="{{ action( "User\CuponController@doComprar" ,$cupon->id) }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre completo (en la tarjeta)</label>
            <input type="text" class="form-control" name="nombre" placeholder="" required="">
        </div> <!-- form-group.// -->

        <div class="form-group">
            <label for="cardNumber">Número de tajeta</label>
            <div class="input-group">
                <input type="text" class="form-control" name="cardNumber" placeholder="">
                <div class="input-group-append">
                    <span class="input-group-text text-muted">
                        <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>  
                        <i class="fab fa-cc-mastercard"></i>
                    </span>
                </div>
            </div>
        </div> <!-- form-group.// -->

        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    <label><span class="hidden-xs">Fecha de expiración</span> </label>
                    <div class="input-group">
                        <input type="number" class="form-control" placeholder="MM" name="mes">
                        <input type="number" class="form-control" placeholder="YY" name="anio">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label data-toggle="tooltip" title=""
                        data-original-title="Código de 3 digitos que se encuentra en la parte de atras de la tarjeta.">CVV <i
                            class="fa fa-question-circle"></i></label>
                    <input type="number" class="form-control" required="">
                </div> <!-- form-group.// -->
            </div>
        </div> <!-- row.// -->
        <button class="subscribe btn btn-primary btn-block" type="button"> Confirmar </button>
    </form>
</div>
<div class="gap"></div>
@endsection
