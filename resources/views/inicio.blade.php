@extends('layouts.master')
@section('titulo')
Inicio
@endsection
@section('contenido')
<div class="container">
        @if(session('status'))
        <p class="alert alert-success">
            {{ session('status') }}
        </p>
    @endif
    @if(count($cupones) == 0)
    <p class="h2">
        <i class="fa fa-arrows-alt"></i> No hay resultado para mostrar
    </p>
    @endif
    @foreach ($cupones as $item)
    @if($item->cantidad > 0)
    <div class="col-md-4">
        <div class="product-thumb">
            <!--
                    <header class="product-header">
                        <img src="/img/800x600.png" alt="Image Alternative text" title="Our Coffee miss u" />
                    </header>
                    -->
            <div class="product-inner">
                <!--
                        <ul class="icon-group icon-list-rating" title="3.7/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                    -->
                <h5 class="product-title">{{ $item->titulo }}</h5>
                <p class="product-desciption">
                    {{ Str::limit($item->descripcion, 150) }}
                </p>
                
                <div class="descuento">
                    <span>{{$item->porcentaje_descuento}}%</span>
                </div>
                <div class="product-meta">
                    <ul class="product-price-list">
                        <li>
                        <span class="product-price"><i class="fa fa-money-bill-alt"></i> {{ $item->precio }}</span>
                        </li>
                    </ul>
                    <br>
                <a class="btn btn-block btn-primary" href="{{ action('InicioController@loadCupon', $item->id) }}"><i
                            class="fa fa-eye"></i> Ver cupón</a>
                    
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
