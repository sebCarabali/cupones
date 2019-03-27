@extends('layouts.master')
@section('titulo')
Busqueda
@endsection
@section('contenido')

<style>
    .range-val {
        display: flex;
        align-content: center;
        flex-direction: row;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar-left">
                <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
                    <li @if($active=='all' )class="active" @endif><a href="{{route('busqueda')}}">Todos<span> {{$count}} </span></a>
                    </li>
                    @foreach ($categorias as $item)
                    <li @if($active===$item->nombre)class="active"@endif>
                        <a href="{{route('filter', $item->id)}}">{{$item->nombre}}<span> {{$item->count}} </span></a>
                    </li>
                    @endforeach
                </ul>
                <!--
                <div class="sidebar-box">
                    <h5>Filter By Price</h5>
                    <div>
                        <p class="range-value-price"></p>
                    </div>
                    <div class="range-val">${{$min}}
                        <input id="range-price" value="{{$min}}" type="range" min="{{ $min }}"  max="{{ $max }}"/>
                        ${{$max}}</div>
                </div>
            -->
            </aside>

        </div>
        <div class="col-md-9">
            <!--<div class="row">
                <div class="col-md-3">
                    <div class="product-sort">
                        <span class="product-sort-selected">sort by <b>Price</b></span>
                        <a href="#" class="product-sort-order fa fa-angle-down"></a>
                        <ul>
                            <li><a href="#">sort by Name</a>
                            </li>
                            <li><a href="#">sort by Date</a>
                            </li>
                            <li><a href="#">sort by Popularity</a>
                            </li>
                            <li><a href="#">sort by Rating</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-7">
                    <div class="product-view pull-right">
                        <a class="fa fa-th-large active" href="#"></a>
                        <a class="fa fa-list" href="category-page-thumbnails-coupon-horizontal.html"></a>
                    </div>
                </div>            
            </div>-->
            <div class="row row-wrap">
                @foreach ($cupones as $item)
                <a class="col-md-4" href="#">
                    <div class="product-thumb">
                        <div class="product-inner">
                            <h5 class="product-title">
                                {{ $item->titulo }}
                            </h5>
                            <p class="product-desciption">
                                {{ str_limit($item->descripcion, 100) }}
                            </p>
                            <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i></span>
                                <ul class="product-price-list">
                                    <li><span
                                            class="product-price">${{ $item->precio * (1 - $item->porcentaje_descuento / 100) }}</span>
                                    </li>
                                    <li><span class="product-old-price">${{ $item->precio }}</span>
                                    </li>
                                    <div class="gap gap-small"></div>
                                    <li><span class="product-save">Ahorra {{ $item->porcentaje_descuento }}%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            {{$cupones->render()}}
            <div class="gap"></div>
        </div>
    </div>

</div>


@endsection
