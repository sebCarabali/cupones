@extends('layouts.master')
@section('titulo')
Administrar aliados
@endsection

@section('contenido')

<div class="container">
    <div class="col-md-3">
        <aside class="sidebar-left">
            <ul class="nav nav-pills nav-stacked nav-arrow">
                <li class="active">
                    <a href="{{ route('aliados.index') }}">Ver todos</a>
                </li>
                <li>
                    <a href="{{ route('aliados.new') }}">Registrar</a>
                </li>
            </ul>
        </aside>
    </div>
    <div class="col-md-9">
        <div class="row row-wrap">
            @if(session('status'))
            <p class="alert alert-success">
                {{ session('status') }}
            </p>
            @endif
            @if(count($aliados) == 0)
            <p class="h2">
                <i class="fa fa-arrows-alt"></i> No hay resultado para mostrar
            </p>
            @endif
            @foreach ($aliados as $aliado)
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
                        <h5 class="product-title">{{ $aliado->nombre }}</h5>
                        <p class="product-desciption">
                            {{ Str::limit($aliado->descripcion, 150) }}
                        </p>
                        <div class="product-meta">
                            <ul class="product-price-list">
                                <!--
                                <li><span class="product-price">$289</span>
                                </li>
                            -->
                            </ul>
                            <a class="btn btn-block btn-primary" href="{!! action('Admin\AliadosController@showFrmEditar', $aliado->id) !!}"><i
                                    class="fa fa-edit"></i> Editar</a>
                            <a class="btn btn-block btn-danger" href="{{ action('Admin\AliadosController@doEliminar', $aliado->id) }}" onclick="event.preventDefault();
                                    document.getElementById('eliminar-form').submit();">
                                <i class="fa fa-times"></i> {{ __('Eliminar') }}
                            </a>

                            <form id="eliminar-form" action="{{ action('Admin\AliadosController@doEliminar', $aliado->id) }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
<div class="gap"></div>
@endsection
